<?php

class Jcowie_Tracking_Model_Resource_Code_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('jcowie_tracking/code');
    }
}