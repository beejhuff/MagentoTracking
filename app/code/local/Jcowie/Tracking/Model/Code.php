<?php

class Jcowie_Tracking_Model_Code extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        parent::_construct();
        $this->_init('jcowie_tracking/code');
    }
}