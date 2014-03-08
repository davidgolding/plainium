<?php

use lithium\net\http\Router;

Router::connect('/', 'Pages::view');

Router::connect('{:controller}/{:action}/{:args}');

?>