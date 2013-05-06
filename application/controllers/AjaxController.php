<?php

class AjaxController extends Zend_Controller_Action
{

    public function addItemAction()
    {
        $this->getHelper("Json")->suppressExit = true;
        if (!isset($_SESSION))
            session_start();
        $itemId = $this->getRequest()->getParam('itemId');
        $item = new Model_Base_Items();
        $item = $item->find($itemId)->current();
        if(!isset($_SESSION['cart']))
            $_SESSION['cart'] = array();
        $cart = $_SESSION['cart'];
        if(!isset($cart[$itemId])){
            $cart[$itemId] = array(
                'count' => 1,
                'price' => $item->price,
                'name'  => $item->name,
            );
        }else
        {
            $cart[$itemId]['count']++;
        }
        $cart[$itemId]['total'] = $cart[$itemId]['price'] * $cart[$itemId]['count'];
        $this->getHelper("Json")->sendJson($cart);
        $_SESSION['cart'] = $cart;
    }
    
     public function getCartAction()
    {
        $this->getHelper("Json")->suppressExit = true;
        if (!isset($_SESSION))
            session_start();
        if(!isset($_SESSION['cart']))
            $_SESSION['cart'] = array();
        $cart = $_SESSION['cart'];
        $this->getHelper("Json")->sendJson($cart);
        $_SESSION['cart'] = $cart;
    }

}