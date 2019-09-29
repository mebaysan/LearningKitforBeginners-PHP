<?php

class View
{
    public static function frontView($module, $method, $data = null)
    {
        ob_start();
        if (file_exists($file = DIRECTORY . "/moduls/{$module}/view/{$method}View.php")) {
            require_once $file;
            $text=ob_get_contents();
            ob_end_clean();
            return $text;
        } else {
            echo "Page Not Found";
        }

    }


    public static function frontLayout($area,$layout,$module,$method,$data=null)
    {
        $data['VIEW']=view::frontView($module,$method,$data);

        require_once DIRECTORY."/layout/{$area}/{$layout}Layout.php";
    }
}
