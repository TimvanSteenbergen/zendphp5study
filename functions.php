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
}

function showcodeEchoEachLinesResult($code){
    $lines = explode("\n",$code);
    foreach ($lines as $line) {
        $posIs = strpos('=',$line);
        $var  = substr($line, 1, $posIs - 1);
        $result = eval($line);
        echo '$' . $var. ' = ' . $result . '\n';
    }
}

function showcode($code, $lines = null, $echoeachline = false){
    $stringarray = explode("\n",$code);
    if($lines!==NULL){
        $numoflines = $lines;
    }else {
        $numoflines = min(20, max(3, count($stringarray)));
    }
    $numofcolumnssource = 65;
    $numofcolumnsresult = 65;
    $id = (int)microtime(true)*rand(0,100000);
    
    //$bgcolor = dechex(rand(190,256)*256*256 + rand(190,256)*256 + rand(190,256));
    $bgcolor = "496d89";

    echo '<div style="background-color: #' . $bgcolor . '; padding:5px;">';
//    echo '<label for="source'.$id.'" rows="'.$numoflines .'">Sourcecode:</label>';
    echo '<textarea id="source'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnssource . '">'.$code.'</textarea>';
    echo '<div style="display:inline-block;vertical-align: top;"><input title="Using eval(<code>) this evaluates to:" type="button" value=">>" style="height:40px;" onclick="EvaluateAgain(\''.$id.'\')" style="height:20px;"/></div>';
    echo '<textarea id="result'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnsresult . '">';
    if ($echoeachline) {
        foreach ($stringarray as $line) {
            $posIs = strpos($line,'=');
            $var  = substr($line, 1, $posIs - 2);
            $line = $line . 'echo $$var;';
            echo '$' . $var. ' = ';
            eval($line);
            echo ";\n";
        }
    }else{
        eval($code);
    }
    echo '</textarea>';
    echo '<br/>';
    echo '</div>';
}

function showXMLdoc($code){

    $stringarray = explode("\n",$code);
    $numoflines = min(20, max(3, count($stringarray)));
    $numofcolumnssource = 60;
    $numofcolumnsresult = 80;
    $id = microtime(true)*rand();
    $bgcolor = dechex(rand(190,256)*256*256 + rand(190,256)*256 + rand(190,256));

    echo '<div style="background-color: #' . $bgcolor . '; padding:5px;">';
//    echo '<label for="source'.$id.'" rows="'.$numoflines .'">Sourcecode:</label>';
    echo '<textarea id="source'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnssource . '">'.$code.'</textarea>';
    echo '<div style="display:inline-block;vertical-align: top;"><input type="button" value="> Evaluates to >" onclick="EvaluateAgain(\''.$id.'\')" style="height:20px;"/></div>';
    echo '<textarea id="result'.$id.'" rows="'.$numoflines .'" cols="' . $numofcolumnsresult . '">';
    $xml = new SimpleXMLElement($code);
    print_r($xml);
    echo '</textarea>';
    echo '<br/>';
    echo '</div>';
}
