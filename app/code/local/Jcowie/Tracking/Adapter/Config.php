<?php
class Jcowie_Tracking_Adapter_Config
{
    public function getHeadTrackingCode($model, $section)
    {
        $model = Mage::getModel($model)->getCollection();
        $model->addFieldToFilter('section', $section);

        return $model;
    }
}