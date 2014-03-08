<?php

namespace app\controllers;

class PagesController extends \lithium\action\Controller {
    
    public function view() {
        return $this->render(['text' => 'Hello World']);
    }
}

?>