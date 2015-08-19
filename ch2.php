<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="2">';

echo '<h2 id="syntax">Chapter 2 - paragraph Syntax</h2>';
echo '<h2 id="returningvalues">Chapter 2 - paragraph Returning values</h2>';
echo '<h2 id="variablescope">Chapter 2 - paragraph Variable scope</h2>';

showcode(<<<'CODE'
CODE
);
showcode(<<<'CODE'
CODE
);
class E{
    protected $a;
    private $b;
    public $c;

}
