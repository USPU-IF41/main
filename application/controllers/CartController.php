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
        $res_category = $category->fetchAll();
        $this->view->parent_category = $res_category;
        $this->view->cart = $cart;
    }

}