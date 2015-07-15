<?php
include_once('index.php');

echo '<h2>Chapter 8 - paragraph JSON</h2>';

showcode(<<<'CODE'
$array = ["foo", "bar", "baz"];
$string =  json_encode($array);
echo $string;
var_dump($string);
CODE
);
showcode(<<<'CODE'
$array = ["one" => "foo", "two" => "bar", "three" => "baz"];
echo json_encode($array);
CODE
);

echo '<h2>Listing 8.1: JSON options</h2>';

showcode(<<<'CODE'
$array = [
    "name" => "Davey Shafik",
    "age" => "30",
    ];
$options = JSON_PRETTY_PRINT |
JSON_NUMERIC_CHECK |
JSON_FORCE_OBJECT;
echo json_encode($array, $options);
CODE
);

echo '<h2>Listing 8.2: Implementing JsonSerializable</h2>';
showcode(<<<'CODE'
class User implements JsonSerializable
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public function jsonSerialize() {
        return [
        "name" => $this->first_name
        . ' ' . $this->last_name,
        "email_hash" => md5($this->email),
        ];
    }
}
$me = new User();
$me->first_name = 'Davey';
echo json_encode($me);
$davey = [
    'first_name' => 'Davey',
    'last_name' => 'Shafik',
    'email' => 'davey@example.com',
    'password' => '$2y$10$TeDnXI3Oz0P5Bgv9sADE9.v7SIGESaoWhFe28ctpVsU47f/BAtFFa'
];
echo json_encode($davey);
CODE
);
