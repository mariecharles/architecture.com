<?php
namespace classes;
abstract class Controller {


    protected $_action;

    const VIEW_DIR = 'views/';

    public function __construct($action)
    {
        $this->_action = $action;
    }

    public function execAction() {


        return $this->{$this->_action}();


    }

    public function render($globalView,$viewmodel) {

        $view = self::VIEW_DIR . $globalView;


        if (!$view) {
            require 'views/main.php';
        } else {
            require ($view);
        }

    }

};
