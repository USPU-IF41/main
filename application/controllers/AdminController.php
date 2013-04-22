<?php

class AdminController extends Zend_Controller_Action{
    
    public function indexAction(){
        $this->view->title = 'Админка';
    }
    
    public function addItemAction(){
        $items = new Model_Base_Items();
        $category = new Model_Base_Category();
        if($this->getRequest()->isPOST())
        {
            $date = array(
                "name"  => $this->getRequest()->getParam("name"),
                "category"  => $this->getRequest()->getParam("category_id"),
                "price" => $this->getRequest()->getParam("price"),
            );
            $items->insert($date);
        }
        $res_items = $items->fetchAll();
        $res_category = $category->fetchAll();
        $this->view->parent_category = $res_category;
    }
    
    public function addCategoryAction(){
        if($this->getRequest()->isPost())
        {
            $orm = new Model_Base_Category();
            $name = $this->getRequest()->getParam("name");
            $parent = $this->getRequest()->getParam("parent");
            $data = array(
                'name'      => $name,
                'parentId'    => $parent,
            );
            $orm->insert($data);
        }
        $category = new Model_Base_Category();
        $res = $category->fetchAll();
        $this->view->parent_category = $res;
    }
}