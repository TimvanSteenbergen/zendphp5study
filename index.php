<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 28-6-2015
 * Time: 12:46
 */

switch (strtoupper(substr(PHP_OS, 0, 3))) {
    // Windows
    case 'WIN':
        $linebreak = "\r\n";
        break;

    // Mac
    case 'DAR':
        $linebreak = "\r";
        break;

    // Unix
    default:
        $linebreak = "\n";
}
//define('PHP_EOL', $linebreak);
