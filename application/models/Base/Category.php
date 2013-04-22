<?php
/**
 * Модель для работы с таблицей категории
 * 
 * @author Arseniy Golushkov <arseniy@golushkov.info>
 */
class Model_Base_Category extends Zend_Db_Table
{
    /**
     *
     * @var String имя таблицы 
     * @var String первичный ключ 
     */
    protected $_name = 'category';
    protected $_primery = 'categoryId';
}