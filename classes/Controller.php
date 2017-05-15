<?php

abstract class Controller {

    protected $_requestUrl;
    protected $_action;

    public function __construct($action, $requestUrl)
    {

        $this->_requestUrl = $requestUrl;
        $this->_action = $action;
    }

    public function execAction() {

        return $this->{$this->action}();
    }

    public function assocView($viewmodem, $globalView) {

        $view = 'views/' . get_class($this) . '/' . $this->_action . '.php';

        if (!$view) {
            require 'views/home.php';
        } else {
            require $view;
        }

    }


};