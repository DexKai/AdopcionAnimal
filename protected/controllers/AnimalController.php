<?php

class AnimalController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view','razasPorEspecie'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update','adoptados'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
	$model=new Animal;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

	if(isset($_POST['Animal']))
	{
		$model->attributes=$_POST['Animal'];

        $rnd = rand(0,9999);  // generate random number between 0-9999
        $model->attributes=$_POST['Animal'];
        $uploadedFile=CUploadedFile::getInstance($model,'image');
        $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
        $model->image = $fileName;
        $model->fecha_ingreso = new CDbExpression('NOW()');
        $model->adoptado = 'No';

	if($model->save())
		$uploadedFile->saveAs(Yii::app()->basePath.'/../images/Animal/'.$fileName);  // image will uplode to rootDirectory/banner/

    $this->redirect(array('view','id'=>$model->id_animal));
}

$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Animal']))
{
	$_POST['Animal']['image'] = $model->image;
    
	$model->attributes=$_POST['Animal'];
	$uploadedFile=CUploadedFile::getInstance($model,'image');
    
	if($model->save())
	{
		if(!empty($uploadedFile))  // check if uploaded file is set or not
        {
            $uploadedFile->saveAs(Yii::app()->basePath.'/../images/Animal/'.$model->image);  // image will uplode to rootDirectory/banner/
        }
       //$this->redirect(array('admin'));

	$this->redirect(array('view','id'=>$model->id_animal));
	}
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
	if(Yii::app()->user->checkAccess('admin')){
		$dataProvider=new CActiveDataProvider('Animal');
	}
	else{
		$dataProvider=new CActiveDataProvider('Animal', array(
    'criteria'=>array(
        'condition'=>'adoptado="No"',
        ),));
	}

$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/* Ver animales adoptados*/
public function actionAdoptados()
{
	 $usuario = Yii::app()->db->createCommand()
    ->select('persona_rut')
    ->from('cruge_user')
    ->where('iduser=:userid', array(':userid'=>Yii::app()->user->id))
    ->queryRow(); 


	$dataProvider=new CActiveDataProvider('Adopcion', array(
    'criteria'=>array(
        'condition'=>'id_rut="'.$usuario['persona_rut'].'"',
        ),));
	

$this->render('adoptados',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Animal('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Animal']))
$model->attributes=$_GET['Animal'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Animal::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='animal-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

/* acción AJAX para llenar DropDown dependiente de provincias*/
public function actionRazasPorEspecie(){
	$list = Raza::model()->findAll('id_especie=?',array($_POST["Animal"]['id_especie']));
	echo '<option value="">Seleccione...</option>';
	foreach ($list as $data) {
		echo "<option value=\"{$data->id_raza}\"}>{$data->nombre_raza}</option>";
	}
}

public function formatearFecha($fecha){
	list($a,$m,$d)=explode("-",$fecha);
	return $d."-".$m."-".$a;
}
}
