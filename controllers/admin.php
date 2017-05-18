<?php
namespace controllers;

use classes\Controller;

use models\AdminActuModel;
use models\AdminRevueModel;
use models\ArticleModel;
use models\MagazineModel;
use models\CommandeModel;
use models\AdminGlobalListModel;


class Admin extends Controller
{
    protected function globalInterfaceView() {

        $viewmodel = new AdminGlobalListModel();

        $revues = $viewmodel->listRevues();

        $actu = $viewmodel->listActu();

        $commandes = $viewmodel->listCommandes();

        $abonnement = $viewmodel->listAbonnement();

        $data['revues'] = $revues;
        $data['actu'] = $actu;
        $data['commandes'] = $commandes;
        $data['abonnement'] = $abonnement;

        $this->render('admin/index.php', $data);

    }


    protected function getPageCommande() {

        $viewmodel = new CommandeModel();

        $this->render('admin/show-commande.php', $viewmodel->pageFromCommande());

    }

    protected function getPageAbonnement() {

        $viewmodel = new CommandeModel();

        $this->render('admin/show-abonnement.php', $viewmodel->pageFromAbonnement());

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

    protected function deleteCommande() {

        $viewmodel = new CommandeModel();

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

    protected function addCommandes() {

        $viewmodel = new CommandeModel();

        $viewmodel->addElementAction();

    }

    protected function addAbonnement() {

        $viewmodel = new CommandeModel();

        $viewmodel->addElementAction2();

    }


}


