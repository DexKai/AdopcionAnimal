<?php

/**
 * This is the model class for table "raza".
 *
 * The followings are the available columns in table 'raza':
 * @property integer $id_raza
 * @property integer $id_especie
 * @property integer $id_color
 * @property string $nombre_raza
 *
 * The followings are the available model relations:
 * @property Colores $idColor
 * @property Especie $idEspecie
 */
class Raza extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'raza';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_especie, nombre_raza', 'required'),
			array('id_especie, id_color', 'numerical', 'integerOnly'=>true),
			array('nombre_raza', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_raza, id_especie, id_color, nombre_raza', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idColor' => array(self::BELONGS_TO, 'Colores', 'id_color'),
			'idEspecie' => array(self::BELONGS_TO, 'Especie', 'id_especie'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_raza' => 'Código Raza',
			'id_especie' => 'Especie',
			'id_color' => 'Color',
			'nombre_raza' => 'Raza',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_raza',$this->id_raza);
		$criteria->compare('id_especie',$this->id_especie);
		$criteria->compare('id_color',$this->id_color);
		$criteria->compare('nombre_raza',$this->nombre_raza,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Raza the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
