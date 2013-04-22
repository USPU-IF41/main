<?php

class ErrorController extends Zend_Controller_Action
{

    public function errorAction()
    {
        $error = $this->_getParam('error_handler');
        $this->view->exception = $error->exception;
        $this->view->request = $error->request;
    }

}