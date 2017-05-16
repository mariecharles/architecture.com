<?php
namespace controllers;

use classes\Controller;
use models\RevuesModel;
use models\MagazineModel;

class Revues extends Controller
{
    protected function getListRevues() {

        $viewmodel = new RevuesModel();
        $this->render('user/show-revues.php', $viewmodel->listRevues());

    }

    protected function getPageMagazine() {
        $viewmodel = new MagazineModel();
        $this->render('user/magazine-detail.php', $viewmodel->pageFromRevues());
    }

}