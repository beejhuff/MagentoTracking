<?php
class Jcowie_Tracking_Adapter_Config
{
    public function getModelData($model)
    {
        $model = Mage::getModel($model);

        return $model->getCollection()->getData();
    }
}