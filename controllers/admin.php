<?php
namespace controllers;

use classes\Controller;

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

}


