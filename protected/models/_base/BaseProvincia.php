<?php

/**
 * This is the model base class for the table "provincia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Provincia".
 *
 * Columns in table "provincia" available as properties of the model,
 * followed by relations of table "provincia" available as properties of the model.
 *
 * @property integer $id_provincia
 * @property string $nombre_provincia
 * @property integer $id_region
 *
 * @property Comuna[] $comunas
 * @property Region $idRegion
 */
abstract class BaseProvincia extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'provincia';
    }

    public static function representingColumn() {
        return 'nombre_provincia';
    }

    public function rules() {
        return array(
            array('nombre_provincia, id_region', 'required'),
            array('id_region', 'numerical', 'integerOnly'=>true),
            array('nombre_provincia', 'length', 'max'=>64),
            array('id_provincia, nombre_provincia, id_region', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'comunas' => array(self::HAS_MANY, 'Comuna', 'id_provincia'),
            'idRegion' => array(self::BELONGS_TO, 'Region', 'id_region'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_provincia' => Yii::t('app', 'Id Provincia'),
                'nombre_provincia' => Yii::t('app', 'Nombre Provincia'),
                'id_region' => Yii::t('app', 'Id Region'),
                'comunas' => null,
                'idRegion' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_provincia', $this->id_provincia);
        $criteria->compare('nombre_provincia', $this->nombre_provincia, true);
        $criteria->compare('id_region', $this->id_region);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}