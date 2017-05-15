<?php
namespace classes;
abstract class Controller {

    protected $_request;
    protected $_action;
    protected $_db;

    public function __construct($action, $request)
    {
        $this->_action = $action;
        $this->_request = $request;
    }

    public function execAction() {

        return $this->{$this->_action}();
    }

    public function assocView($viewmodel, $globalView) {

        $view = 'views/' . get_class($this) . '/' . $this->_action . '.php';

        if (!$view) {
            require 'views/main.php';
        } else {
            require ($view);
        }

    }

};
