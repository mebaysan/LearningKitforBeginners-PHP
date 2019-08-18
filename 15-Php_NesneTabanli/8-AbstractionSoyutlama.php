<?php
abstract class Plugin
{
    abstract public function setTitle($title); // soyut bir sınıfın soyut bir methodu. bu method bu sınıftan türeyen diğer class'larda da aolmak zorundadaır.
}
class LastComments extends Plugin
{
    public function setTitle($title)
    { }
}
class SocialMedia extends Plugin
{
    public function setTitle($title)
    { }
}
