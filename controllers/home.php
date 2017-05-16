<?php
namespace controllers;

use classes\Controller;
use models\HomeModel;

class Home extends Controller
{
    protected function Index() {

        $viewmodel = new HomeModel();
        $this->render('home/index.php', $viewmodel->Index());

    }

}