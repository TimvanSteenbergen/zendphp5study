<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="5">';

echo "<h2 id='numbertypes'>Listing 5.1: An HTML form</h2>";
echo "Not really useful since it does not work with eval() (yet)";
showcode(<<<'CODE'
<!--Form submitted with GET-->
<form action="generalIncludes.php" method="GET">
List: <input type="text" name="list" /><br />
Order by:
<select name="orderby">
<option value="name">Name</option>
<option value="city">City</option>
<option value="zip">ZIP Code</option>
</select><br />
Sort order:
<select name="direction">
<option value="asc">Ascending</option>
<option value="desc">Descending</option>
</select>
</form>
<!--Form submitted with POST-->
<form action="generalIncludes.php" method="POST">
<input type="hidden" name="login" value="1" />
<input type="text" name="user" />
<input type="password" name="pass" />
</form>
CODE
,4);
echo '<h2>Listing 5.2: An HTML form with array notation</h2>';
showcode(<<<'CODE'
<form method="post">
<p>
Please choose all languages you currently know or
would like to learn in the next 12 months.
</p>
<p>
<label>
<input type="checkbox"
name="languages[]"
value="PHP" />
PHP
</label>
<label>
<input type="checkbox"
name="languages[]"
value="Perl" />
Perl
</label>
<label>
<input type="checkbox"
name="languages[]"
value="Ruby" />
Ruby
</label>
<br />
<input type="submit" value="Send" name="poll" />
</p>
</form>
foreach ($_POST['languages'] as $language) {
switch ($language) {
case 'PHP' :
echo "PHP? Awesome! <br />";
break;
case 'Perl' :
echo "Perl? Ew. Just Ew. <br />";
break;
case 'Ruby' :
echo "Ruby? Can you say... 'bandwagon?' <br />";
break;
default:
echo "Unknown language!";
}
}
CODE
,4);
echo '<h2>Listing 5.7: Custom session handler class before 5.4</h2>';
showcode(<<<'CODE'
class JsonSessionHandler
{
    protected $save_path;
    protected $file;

    public function open($save_path, $session_id)
    {
        $this->save_path = $save_path;
        $this->file = $save_path
            . DIRECTORY_SEPARATOR
            . $session_id
            . '.json';
        return is_writable($save_path);
    }

    public function close()
    {
        return is_writeable($this->file);
    }

    public function read($session_id)
    {
        return json_decode(file_get_contents($this->file));
    }

    public function write($session_id, $data)
    {
        return (bool)file_put_contents(json_encode($data));
    }

    public function destroy($session_id)
    {
        unlink($this->file);
        return !is_file($this->file);
    }

    public function gc($maxlifetime)
    {
        $timeout = time() - $maxlifetime;
        $files = glob($this->save_path
            . DIRECTORY_SEPARATOR
            . '*.json');
        foreach ($files as $file) {
            if (filemtime($file) < $timeout) {
                unlink($file);
            }
        }
    }
}
$handler = new JsonSessionHandler;
session_set_save_handler(
    [$handler, 'open'],
    [$handler, 'close'],
    [$handler, 'read'],
    [$handler, 'write'],
    [$handler, 'destroy'],
    [$handler, 'gc']
);
CODE
);
echo '<h2>Listing 5.8: Custom session handler class with 5.4</h2>';
showcode(<<<'CODE'
class JsonSessionHandler implements SessionHandlerInterface
{
    protected $save_path;
    protected $file;

    public function open($save_path, $session_id)
    {
        $this->save_path = $save_path;
        $this->file = $save_path
            . DIRECTORY_SEPARATOR
            . $session_id
            . '.json';
        return is_writable($save_path);
    }

    public function close()
    {
        return is_writeable($this->file);
    }

    public function read($session_id)
    {
        return json_decode(file_get_contents($this->file));
    }

    public function write($session_id, $data)
    {
        return (bool)file_put_contents(json_encode($data));
    }

    public function destroy($session_id)
    {
        unlink($this->file);
        return !is_file($this->file);
    }

    public function gc($maxlifetime)
    {
        $timeout = time() - $maxlifetime;
        $files = glob($this->save_path
            . DIRECTORY_SEPARATOR
            . '*.json');
        foreach ($files as $file) {
            if (filemtime($file) < $timeout) {
                unlink($file);
            }
        }
    }
}
$handler = new JsonSessionHandler;
session_set_save_handler($handler);
CODE
);
echo "<h2 id='variableinterpolation'>Variable interpolation</h2>";
showcode(<<<'CODE'
$who = "World";
echo "Hello $who\n";
echo 'Hello $who\n';
CODE
);
showcode(<<<'CODE'
$me = 'Davey';
$names = array('Smith', 'Jones', 'Jackson');
echo "There cannot be more than two {$me}s!";
echo "Citation: {$names[1]}[1987]";
CODE
);
showcode(<<<'CODE'
CODE
);

echo "<h2 id='heredoc'>The Heredoc and Nowdoc Syntax</h2>";
showcode(<<<'CODE'
$who = "World";
echo <<<TEXT
So I said, "Hello $who"
TEXT;
CODE
);

showcode(<<<'CODE'
$who = "World";
echo <<<'TEXT'
So I said, "Hello $who"
TEXT;
CODE
);
showcode(<<<'CODE'
class Hello {
public $greeting = <<<EOT
Hello World
EOT;
}
$hi = new Hello;
echo $hi->greeting;
CODE
);
showcode(<<<'CODE'
CODE
);


echo "<h2 id='escaping'>Escaping literal values</h2>";
showcode(<<<'CODE'
echo 'This is \'my\' string';
CODE
);

showcode(<<<'CODE'
$a = 10;
echo "The value of \$a is \"$a\".";
CODE
);

showcode(<<<'CODE'
echo "Here's an escaped backslash: - \\ -";
CODE
);

showcode(<<<'CODE'
echo "Here's a literal brace + dollar sign: {\$";
CODE
);

showcode(<<<'CODE'
echo "Here's a literal brace + dollar sign: {\$";
CODE
);
