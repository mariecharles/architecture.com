<?php
namespace controllers;

use classes\Controller;
use models\ActuModel;

class Actu extends Controller
{
    protected function Index() {

        $viewmodel = new ActuModel();
        $this->render('show/show-actu.php', $viewmodel->pageActu());

    }

}