<?php
/**
 * Модель для работы с таблицей товаров
 * 
 * @author Arseniy Golushkov <arseniy@golushkov.info>
 */
class Model_Base_Items extends Zend_Db_Table
{
    /**
     *
     * @var String имя таблицы 
     * @var String первичный ключ 
     */
    protected $_name = 'items';
    protected $_primery = 'itemid';
}