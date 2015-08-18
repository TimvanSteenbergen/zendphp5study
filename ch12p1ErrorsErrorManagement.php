<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="12">';
echo '<h2>Chapter 12 - paragraph PHP Errors and errormanagement</h2>';

echo '<h3>Listing 12.1: Logging all errors</h3>';
showcode(<<<'CODE'
$oldErrorHandler = '';
function myErrorHandler($no, $str, $file, $line, $context) {
    global $oldErrorHandler;
    echo "This is myErrorHandler saying:\n" .
    "Error $str in $file at line $line";
// Call the old error handler
    if ($oldErrorHandler) {
        $oldErrorHandler($no, $str, $file, $line, $context);
    }
}
$oldErrorHandler = set_error_handler('myErrorHandler');
$a=1/0;
CODE
);
//echo '<h3>Listing 12.2: The base Exception class</h3>';
//showcode(<<<'CODE'
//class Exception
//{
//// The error message associated with this exception
//    protected $message = 'Unknown Exception';
//// The error code associated with this exception
//    protected $code = 0;
//// The pathname of the file where the exception occurred
//    protected $file;
//// The line of the file where the exception occurred
//    protected $line;
//// Constructor
//    function __construct ($message = null, $code = 0){}
//// Returns the message
//    final function getMessage(){}
//// Returns the error code
//    final function getCode(){}
//// Returns the file name
//    final function getFile(){}
//// Returns the file line
//    final function getLine(){}
//// Returns an execution backtrace as an array
//    final function getTrace(){}
//// Returns a backtrace as a string
//    final function getTraceAsString(){}
//// Returns a string representation of the exception
//    function __toString(){}
//}
//CODE
//);

echo '<h3>Listing 12.3: Bubbling exception through try...catch</h3>';
showcode(<<<'CODE'
try {
    if (true) {
        echo "Throwing\n";
        throw new \Exception("This is my error");
    }
} catch (\Exception $e) {
        echo "Catching Exception: " . $e->getMessage();
}
CODE
);
echo '<h3>Listing 12.4: Extending the base Exception class</h3>';
showcode(<<<'CODE'
//namespace myCode;
class myException extends \Exception { }
try {
    try {
        try {
            new PDO("mysql:dbname=zce");
            throw new myException("An unknown error occurred.");
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    } catch(\myCode\Exception $e) {
        echo $e->getMessage();
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
CODE
);

echo '<h3>Listing 12.5: Catching different exceptions</h3>';
showcode(<<<'CODE'
try {
    new PDO("mysql:dbname=zce");
    throw new myException("An unknown error occurred.");
} catch (\PDOException $e) {
    echo $e->getMessage();
} catch (\myCode\Exception $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo $e->getMessage();
}
CODE
);
echo '<h3>Listing 12.6: Handling uncaught exceptions</h3>';
showcode(<<<'CODE'
function handleUncaughtException($e) {
    echo $e->getMessage();
}
set_exception_handler("handleUncaughtException");
//throw new Exception("You caught me!");
echo "If throw gets uncommented, this message will not be displayed";
CODE
);
echo '<h3>Listing 12.7: Using a finally block</h3>';
showcode(<<<'CODE'
try {
// Try something
  echo "Trying something\n";
} catch (\Exception $exception) {
// Handle exception
  echo "Catching it\n";
  throw new Exception("You caught me!");
} finally {
// Whatever happened, do this
  echo "Finalizing it\n";
}
CODE
);
echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);
