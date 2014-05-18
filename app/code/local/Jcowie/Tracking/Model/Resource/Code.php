<?php

class Jcowie_Tracking_Model_Resource_Code extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('jcowie_tracking/code', 'tracking_id');
    }
}