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

//Handle the AJAX-call from button 'Run Again'
if (isset ( $_GET ["codeJSON"] )){
    $code = $_GET ["codeJSON"];
    ob_start();
    eval($code);
    $generated_html = ob_get_contents();
    ob_end_clean();
    echo $generated_html;
    return;
}else{
//    echo "codesample niet in de post.";
}

function showcode($code){
    $stringarray = explode("\n",$code);
    $numoflines = min(20,max(3,count($stringarray)));
    $numofcolumnssource = 60;
    $numofcolumnsresult = 80;
    $id = microtime(true)*rand();
    $bgcolor = dechex(rand(190,256)*256*256 + rand(190,256)*256 + rand(190,256));

    echo '<div style="background-color: #' . $bgcolor . '; padding:5px;">';
//    echo '<label for="source'.$id.'" rows="'.$numoflines .'">Sourcecode:</label>';
    echo '<textarea id="source'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnssource . '">'.$code.'</textarea>';
    echo '<div style="display:inline-block;vertical-align: top;"><input type="button" value="> Evaluates to >" onclick="EvaluateAgain(\''.$id.'\')" style="height:20px;"/></div>';
    echo '<textarea id="result'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnsresult . '">';
    eval($code);
    echo '</textarea>';
    echo '<br/>';
    echo '</div>';
}
