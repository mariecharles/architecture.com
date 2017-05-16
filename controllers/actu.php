<?php
namespace controllers;

use classes\Controller;
use models\ActuModel;
use models\ArticleModel;

class Actu extends Controller
{
    protected function getListActu() {

        $viewmodel = new ActuModel();
        $this->render('user/show-actu.php', $viewmodel->listActu());

    }

    protected function getPageActu() {

        $viewmodel = new ArticleModel();
        $this->render('user/article-detail.php', $viewmodel->pageFromActu());
    }

}



