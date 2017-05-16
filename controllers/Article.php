<?php
namespace controllers;

use classes\Controller;
use models\ArticleModel;

class Article extends Controller
{
    protected function Index() {
        $viewmodel = new ArticleModel();
        $this->render('article-detail.php', $viewmodel->pageArticle());
    }

}