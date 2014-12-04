<?php

/**
 * This is the model base class for the table "region".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Region".
 *
 * Columns in table "region" available as properties of the model,
 * followed by relations of table "region" available as properties of the model.
 *
 * @property integer $id_region
 * @property string $nombre_region
 * @property string $orginal
 *
 * @property Provincia[] $provincias
 */
abstract class BaseRegion extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'region';
    }

    public static function representingColumn() {
        return 'nombre_region';
    }

    public function rules() {
        return array(
            array('nombre_region, orginal', 'required'),
            array('nombre_region', 'length', 'max'=>64),
            array('orginal', 'length', 'max'=>4),
            array('id_region, nombre_region, orginal', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'provincias' => array(self::HAS_MANY, 'Provincia', 'id_region'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_region' => Yii::t('app', 'Id Region'),
                'nombre_region' => Yii::t('app', 'Nombre Region'),
                'orginal' => Yii::t('app', 'Orginal'),
                'provincias' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_region', $this->id_region);
        $criteria->compare('nombre_region', $this->nombre_region, true);
        $criteria->compare('orginal', $this->orginal, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}