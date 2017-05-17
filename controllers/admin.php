<?php
namespace controllers;

use classes\Controller;

use models\AdminActuModel;
use models\AdminRevueModel;
use models\ArticleModel;
use models\AdminGlobalListModel;


class Admin extends Controller
{
    protected function globalInterfaceView() {

        $viewmodel = new AdminGlobalListModel();

        $revues = $viewmodel->listRevues();

        $actu = $viewmodel->listActu();

        $data['revues'] = $revues;
        $data['actu'] = $actu;

        $this->render('admin/index.php', $data);

    }

    protected function getPageActu() {

        $viewmodel = new ArticleModel();

        $this->render('admin/eddit-form-article.php', $viewmodel->pageFromActu());

    }


    protected function deleteActu() {

        $viewmodel = new AdminActuModel();

        $viewmodel->deleteElementAction();

    }

    protected function deleteRevues() {

        $viewmodel = new AdminRevueModel();

        $viewmodel->deleteElementAction();

    }




    protected function edditActu() {

        $viewmodel = new AdminActuModel();

        $viewmodel->edditElementAction();

    }

}


