<?php
namespace controllers;

use classes\Controller;
use models\ArticleModel;

class Article extends Controller
{
    protected function Articles() {
        $viewmodel = new ArticleModel();
        $this->render('article-detail.php', $viewmodel->pageArticle());
    }

}