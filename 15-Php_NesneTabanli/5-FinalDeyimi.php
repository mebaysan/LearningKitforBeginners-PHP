<?php
class Marka
{
    final public function test()
    { } // --> final sayesinde bu sınıftan türetilen diğer sınıflar test methoduna override yapamayacak
}
class Model extends Marka
{ }
final class Seri extends Model // bu class'dan başka bir şey türetilemeytecek.
{ }
class Urun extends Seri
{ }
