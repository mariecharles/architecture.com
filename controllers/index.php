<?php
namespace controllers;

use classes\Controller;
use models\ActuModel;


class Index extends Controller
{
    protected function getListActu() {

        $viewmodel = new ActuModel();
        $this->render('user/index.php', $viewmodel->listActu());

    }

}