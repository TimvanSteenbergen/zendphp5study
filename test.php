<?php
interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}

$pattern = '/([A-z]{3})([a-z])( )/';
$string = 'Mary had a little lamb';
$matched = preg_match($pattern, $string, $result);
print_r($matched);
echo "<pre>";
print_r($result);

echo "<br>";
echo "<br>";

$subject = "abfgdef";
$pattern = '/def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);
echo "<br>";
echo "<br>";

$subject = "abfgdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);
?>