<?php
namespace controllers;

use classes\Controller;

use models\AdminActuModel;
use models\AdminRevueModel;
use models\ArticleModel;
use models\MagazineModel;
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
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $viewmodel = new ArticleModel();

            $this->render('admin/edit-form-article.php', $viewmodel->pageFromActu());
        } else {
            $this->editActu();
        }


    }

    protected function getPageRevues() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $viewmodel = new MagazineModel();

            $this->render('admin/edit-form-revue.php', $viewmodel->pageFromRevues());
        } else {
            $this->editRevues();
        }


    }




    protected function deleteActu() {

        $viewmodel = new AdminActuModel();

        $viewmodel->deleteElementAction();

    }

    protected function deleteRevues() {

        $viewmodel = new AdminRevueModel();

        $viewmodel->deleteElementAction();

    }



    protected function editActu() {

       $viewmodel = new AdminActuModel();

       $viewmodel->editElementAction();

    }

    protected function editRevues() {

        $viewmodel = new AdminRevueModel();

        $viewmodel->editElementAction();

    }




    protected function addActu() {

        $viewmodel = new AdminActuModel();

        $viewmodel->addElementAction();

    }

    protected function addRevues() {

        $viewmodel = new AdminRevueModel();

        $viewmodel->addElementAction();

    }


}


