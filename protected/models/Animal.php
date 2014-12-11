<?php

/**
 * This is the model class for table "animal".
 *
 * The followings are the available columns in table 'animal':
 * @property integer $id_animal
 * @property integer $numero_chip
 * @property string $nombre_animal
 * @property integer $id_especie
 * @property integer $id_raza
 * @property integer $id_color
 * @property string $genero_animal
 * @property integer $edad_animal
 * @property double $peso
 * @property string $desparasitado
 * @property string $esterilizado
 * @property string $vacunas
 * @property string $observaciones
 * @property string $fecha_ingreso
 * @property string $image
 * @property string $adoptado
 *
 * The followings are the available model relations:
 * @property Adopcion[] $adopcions
 * @property Especie $idEspecie
 * @property Colores $idColor
 */
class Animal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'animal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_chip, nombre_animal, id_especie, id_raza, id_color, fecha_ingreso, image', 'required'),
			array('numero_chip, id_especie, id_raza, id_color, edad_animal', 'numerical', 'integerOnly'=>true),
			array('peso', 'numerical'),
			array('nombre_animal', 'length', 'max'=>20),
			array('genero_animal, desparasitado, esterilizado', 'length', 'max'=>11),
			array('image', 'length', 'max'=>1024),
			array('adoptado', 'length', 'max'=>2),
			array('vacunas, observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_animal, numero_chip, nombre_animal, id_especie, id_raza, id_color, genero_animal, edad_animal, peso, desparasitado, esterilizado, vacunas, observaciones, fecha_ingreso, adoptado', 'safe', 'on'=>'search'),
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
			'adopcions' => array(self::HAS_MANY, 'Adopcion', 'id_animal'),
			'idEspecie' => array(self::BELONGS_TO, 'Especie', 'id_especie'),
			'idColor' => array(self::BELONGS_TO, 'Colores', 'id_color'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_animal' => 'Código',
			'numero_chip' => 'Número Chip',
			'nombre_animal' => 'Nombre',
			'id_especie' => 'Especie',
			'id_raza' => 'Raza',
			'id_color' => 'Color',
			'genero_animal' => 'Genero',
			'edad_animal' => 'Edad (meses)',
			'peso' => 'Peso (kilos)',
			'desparasitado' => 'Desparasitado',
			'esterilizado' => 'Esterilizado',
			'vacunas' => 'Vacunas',
			'observaciones' => 'Observaciones',
			'fecha_ingreso' => 'Fecha Ingreso',
			'image' => 'Foto',
			'adoptado' => 'Indicador Adoptado',
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

		$criteria->compare('id_animal',$this->id_animal);
		$criteria->compare('numero_chip',$this->numero_chip);
		$criteria->compare('nombre_animal',$this->nombre_animal,true);
		$criteria->compare('id_especie',$this->id_especie);
		$criteria->compare('id_raza',$this->id_raza);
		$criteria->compare('id_color',$this->id_color);
		$criteria->compare('genero_animal',$this->genero_animal,true);
		$criteria->compare('edad_animal',$this->edad_animal);
		$criteria->compare('peso',$this->peso);
		$criteria->compare('desparasitado',$this->desparasitado,true);
		$criteria->compare('esterilizado',$this->esterilizado,true);
		$criteria->compare('vacunas',$this->vacunas,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('adoptado',$this->adoptado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Animal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/* Esta función retornará un array con todas las especies para ser usadas en un DropDown */
	public function getMenuEspecie(){
		$especies = Especie::model()->findAll();
		return CHtml::listData($especies,'id_especie','nombre_especie');
	}

	/* Esta función retornará un array con todas las razas para ser usadas en un DropDown */
	public function getMenuRaza(){
		$razas = Raza::model()->findAll();
		return CHtml::listData($razas,'id_raza','nombre_raza');
	}

	/* Esta función retornará un array con todas las colores para ser usadas en un DropDown */
	public function getMenuColores(){
		$colores = Colores::model()->findAll();
		return CHtml::listData($colores,'id_color','nombre_color');
	}
}
