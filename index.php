<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 28-6-2015
 * Time: 12:46
 */
//
//switch (strtoupper(substr(PHP_OS, 0, 3))) {
//    // Windows
//    case 'WIN':
//        $linebreak = "\r\n";
//        break;
//
//    // Mac
//    case 'DAR':
//        $linebreak = "\r";
//        break;
//
//    // Unix
//    default:
//        $linebreak = "\n";
//}
//define('PHP_EOL', $linebreak);

function showcode($code){
    echo '<div class="codesource">';
        var_dump($code);
        echo '<div class="coderesult">';
        echo 'Shows:<br/>';
        eval($code);
        echo '</div>';
    echo '</div>';
    echo '<br/>';
}
