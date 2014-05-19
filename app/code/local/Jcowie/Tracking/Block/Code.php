<?php

class Jcowie_Tracking_Block_Code extends Mage_Core_Block_Template
{
    /** @var \Jcowie_Tracking_Adapter_Config */
    private $_configAdapter;

    /**
     * @param array $services
     */
    public function __construct(array $services = array())
    {
        if (isset($services['config_adapter'])) {
            $this->_configAdapter = $services['config_adapter'];
        }
        if (!$this->_configAdapter instanceof Jcowie_Tracking_Adapter_Config) {
            $this->_configAdapter = new Jcowie_Tracking_Adapter_Config();
        }
    }

    public function getHeadTrackingCode()
    {
        $model = $this->_configAdapter->getHeadTrackingCode('jcowie_tracking/code', 1);

        return $model;
    }
}