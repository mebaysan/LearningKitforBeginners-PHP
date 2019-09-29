<?php

class App
{
    protected $nowPath;
    protected $nowMethod;
    protected static $routes = [];
    protected $home;

    public function __construct($config)
    {
        $this->nowPath = $_SERVER['REQUEST_URI'];
        $this->nowMethod = $_SERVER['REQUEST_METHOD'];
        $this->home = $config['home'];
        $this->startRoute();

    }

    public static function getAction($link, $path, $auth = false, $area = null)
    {
        self::$routes[] = ['GET', $link, $path, $auth, $area];
    }

    public static function postAction($link, $path, $auth = false, $area = null)
    {
        self::$routes[] = ['POST', $link, $path, $auth, $area];
    }

    public function startRoute()
    {
        foreach (self::$routes as $routes) {
            list($method, $link, $path, $auth, $area) = $routes;
            $methodCheck = $this->nowMethod == $method;
            $pathCheck = preg_match("@^{$link}$@", $this->nowPath, $params);
            if ($methodCheck && $pathCheck) {
                $uri = explode('/', $path);
                array_shift($uri);
                list($activeModule, $activeMethod) = $uri;
                if ($this->nowPath == "/") {
                    $module = $this->home['module'];
                    $controller = $this->home['module'] . 'Controller.php';
                    $method = $this->home['method'];
                } else {
                    $module = $activeModule;
                    $controller = $activeModule . 'Controller.php';
                    $method = $activeMethod;

                }
                if (file_exists($file = DIRECTORY . "/modules/" . $module . "/controller/" . $controller)) {
                    require_once $file;
                } else {
                    echo "Controller not found!";
                }
            }
        }
    }
}