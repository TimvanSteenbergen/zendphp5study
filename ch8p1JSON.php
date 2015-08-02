<?php
include_once('index.php');
echo '<input id="chapter" type="hidden" value="8">';
echo '<h2>Chapter 8 - paragraph JSON encoding data</h2>';

showcode(<<<'CODE'
$array = ["foo", "bar", 9=>'bdaz'];
$string =  json_encode($array);
echo $string ."\n";
var_dump($string);
CODE
);
showcode(<<<'CODE'
$array = ["one" => "foo", "two" => "bar", "three" => "baz"];
echo json_encode($array);
CODE
);

echo '<h3>Listing 8.1: JSON options</h3>';
echo 'Try removing any of the parameters, or $options from the call. Or the key from the data which might return a array, if JSON_FORCE_OBJECT is not set:';
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
echo 'Try removing any of the parameters:';
showcode(<<<'CODE'
$array = [
    "tags" => "These are tags <> <b> etc",
    "ampersand" => "This is a ampersand &",
    "apostrophe" => "This is a apostrophe ''",
    "quote" => "This is a quote \"",
    ];
$options =
JSON_HEX_TAG |
JSON_HEX_AMP |
JSON_HEX_APOS |
JSON_HEX_QUOT;
echo json_encode($array, $options);
CODE
);

echo '<h3>Listing 8.2: Implementing JsonSerializable</h3>';
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
echo '<h2>Chapter 8 - paragraph JSON decoding data</h2>';
echo 'Decode into an object or into an array.';
showcode(<<<'CODE'
$json = '{ "name": "Davey Shafik", "age": 30 }';
$data = json_decode($json);
print_r($data);
$data = json_decode($json, true);
print_r($data);
CODE
);

