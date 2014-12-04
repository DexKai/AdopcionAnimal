<?php

Yii::import('application.models._base.BaseRegion');

class Region extends BaseRegion
{
    /**
     * @return Region
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Region|Regions', $n);
    }

}