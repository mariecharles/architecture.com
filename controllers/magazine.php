<?php
namespace controllers;

use classes\Controller;
use models\MagazineModel;

class Magazine extends Controller
{
    protected function Index() {
        $viewmodel = new MagazineModel();
        $this->render('magazine-detail.php', $viewmodel->pageMagazine());
    }


}