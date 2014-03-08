<?php

define('LITHIUM_APP_PATH', dirname(dirname(__DIR__)));

define('LITHIUM_LIBRARY_PATH', '/usr/local/lib'); //replace with server path to Lithium parent directory

if (!include LITHIUM_LIBRARY_PATH . '/lithium/core/Libraries.php') {
    $message  = "Lithium could not be found. Check the value of LITHIUM_LIBRARY_PATH in ";
    $message .= __FILE__ . ".";
    throw new ErrorException($message);
}

use lithium\core\Libraries;

Libraries::add('lithium');

Libraries::add('app', ['default' => true]);

?>