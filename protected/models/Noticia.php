<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property integer $id_noticia
 * @property string $titulo
 * @property string $fecha_publicacion
 * @property string $cuerpo
 * @property string $image
 */
class Noticia extends CActiveRecord
{
	public $picture;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_publicacion', 'required'),
			array('titulo', 'length', 'max'=>100),
			array('image', 'length', 'max'=>128),
			array('cuerpo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_noticia, titulo, fecha_publicacion, cuerpo', 'safe', 'on'=>'search'),
			array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_noticia' => 'Id Noticia',
			'titulo' => 'Titulo',
			'fecha_publicacion' => 'Fecha Publicación',
			'cuerpo' => 'Cuerpo',
			'image' => 'Image',
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

		$criteria->compare('id_noticia',$this->id_noticia);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);
		$criteria->compare('cuerpo',$this->cuerpo,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
