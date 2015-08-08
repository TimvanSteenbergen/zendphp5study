<?php
include_once('index.php');
echo '<input id="chapter" type="hidden" value="11">';
echo '<h2>Chapter 11 - paragraph Design Pattern Theory</h2>';


echo '<h3>Listing 11.8: Singleton example</h3>';
showcode(<<<'CODE'
class DB
{
    private static $_singleton;
    private $_connection;
    private function __construct($dsn) {
        $this->_connection = new PDO($dsn);
    }
    public static function getInstance($dsn) {
        if (is_null(self::$_singleton)) {
            self::$_singleton = new DB($dsn);
        }
        return self::$_singleton;
    }
}
$dsn = 'mysql:host=localhost;dbname=library';
$dsn = 'mysqli://test:test@localhost/testdb';
$db = DB::getInstance($dsn);
CODE
);

echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);


echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);


echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);


echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);

