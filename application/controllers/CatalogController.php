<?php

class CatalogController extends Zend_Controller_Action{
    
    public function indexAction()
    {
        $this->view->title = "Каталог";
        $category = new Model_Base_Category();
        $res = $category->fetchAll();
        $items = new Model_Base_Items();
        //var_dump($items);
        $this->view->catalog = $items->fetchAll();
        //var_dump($this->view->catalog);
        $this->view->parent_category = $res;
    }
}