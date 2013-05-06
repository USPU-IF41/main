<?php

class CartController extends Zend_Controller_Action
{

    public function listAction()
    {
        if (!isset($_SESSION))
            session_start();
        if (!isset($_SESSION['cart']))
            $_SESSION['cart'] = array();
        $cart = $_SESSION['cart'];
        $this->view->cart = $cart;
    }

}