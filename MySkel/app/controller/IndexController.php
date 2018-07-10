<?php
namespace app\controller;

use app\core as core;

class IndexController extends core\Controller
{

    public function index($args = false)
    {
        $this->loadView('head');
        $this->loadView('menu', ['menuId' => 1]);

        $this->loadView('home');
        $this->loadView('foot');
    }
}
