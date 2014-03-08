<?php

use lithium\action\Dispatcher;
use lithium\core\Environment;
use lithium\core\Libraries;

Dispatcher::applyFilter('run', function($self, $params, $chain) {
    Environment::set($params['request']);
    
    foreach (array_reverse(Libraries::get()) as $name => $config) {
        if ($name === 'lithium') {
            continue;
        }
        $file = $config['path'] . '/config/routes.php';
        file_exists($file) ? call_user_func(function() use ($file) { include $file; }) : null;
    }
    return $chain->next($self, $params, $chain);
});

?>