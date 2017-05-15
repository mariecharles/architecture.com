<?php
namespace controllers;

use classes\Controller;

class Home extends Controller
{
    public function __construct($action, $request)
    {
        parent::__construct($action, $request);
        echo 'controller';
    }

    protected function Index() {
//        $viewmodel = new HomeModel();
//        $this->returnView($viewmodel->Index(),false);
        echo 'index';
    }
}