<?php

echo '<input id="chapter" type="hidden" value="11">';
echo 'd';
$mysqli = new mysqli("localhost", "user", "password", "test");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
$row = $res->fetch_assoc();
echo $row['_msg'];
