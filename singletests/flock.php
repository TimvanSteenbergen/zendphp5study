<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 29-8-2015
 * Time: 13:41
 */
session_start();
//unlink("lock.txt");die();
echo "<pre/>";
//print_r($_SERVER);
//print_r($_SERVER['SERVER_NAME']);
print_r($_SESSION);
print_r($_ENV);
die("");;
phpinfo();die();
echo PHP_EOL;
$fp = fopen("lock.txt", "a+");
setcookie('sdf','sdf', 0,'',true,true,true);
echo "fseek: ".fseek($fp, 2)."<br><br>";
echo "fread: ".fread($fp,11)."<br><br>";
echo "fgets: ".fgets($fp)."<br><br>";
echo "fgetss: ".fgetss($fp)."<br><br>";
echo "ftell: ".ftell($fp)."<br><br>";
if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    ftruncate($fp, 0);      // truncate file
    fwrite($fp, "1e<>\r<br><br>2e&");
    fflush($fp);            // flush output before releasing the lock
    fwrite($fp, "3e%<br><br>4e()");
    flock($fp, LOCK_UN);    // release the lock
} else {
    echo "Couldn't get the lock!";
}
echo "ftell: ".ftell($fp)."<br><br>";
echo "rewind: ".rewind($fp)."<br><br>";

echo "ftell: ".ftell($fp)."<br><br>";
fclose($fp);