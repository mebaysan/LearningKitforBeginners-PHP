<?php
class File
{
    const DIRECTORY = __DIR__; // __DIR__ -> hangi dizindeysek onu döndürür bize.
    public function getDirectory()
    {
        return self::DIRECTORY; // const sabitlerine de self ve parent ile ulaşabiliriz.
    }
}
$file = new File();
echo $file->getDirectory();
