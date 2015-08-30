<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 29-8-2015
 * Time: 13:41
 */
$fp = fopen("lock.txt", "w+");

if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    ftruncate($fp, 0);      // truncate file
    fwrite($fp, "Write something here\n");
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock
} else {
    echo "Couldn't get the lock!";
}

fclose($fp);