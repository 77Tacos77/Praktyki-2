<?php
namespace src\Controllers;

class IndexController extends FrontController {
    public function __construct() {
        parent::__construct();
        $this->setTemplate('pages/index.tpl');
    }
}