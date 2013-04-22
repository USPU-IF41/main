<?php

class IndexController extends Zend_Controller_Action
{

    public function indexAction()
    {
        $category = new Model_Base_Category();
        $res = $category->fetchAll();
        $this->view->thisDate = date("d.m.Y H:i");
        $this->view->title = "Главная страница";
        $this->view->category = $res;
    }

}