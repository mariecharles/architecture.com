<?php
namespace controllers;

use classes\Controller;
use models\RevuesModel;

class Revues extends Controller
{
    protected function Index() {

        $viewmodel = new RevuesModel();
        $this->render('show/show-revues.php', $viewmodel->pageRevues());

    }

}