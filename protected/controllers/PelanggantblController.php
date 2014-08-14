<?php

class PelanggantblController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','register'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('ambilcart','cart','ubah','ubahdata','hapus','hapusdata','check','transaksi'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionCheck()
	{
		$this->render('checkout');
	}
	public function actionTransaksi()
	{
		$this->render('transaksi_selesai');
	}
	public function actionAmbilcart()
	{
		$this->render('ambilcart');
	}
	public function actionHapus($id)
	{
		$this->render('hapus_transaksi',array(
			'model'=>$this->loadId($id),
		));
	}
	public function actionHapusdata($id)
	{
		$model=$this->loadId($id);
		$this->render('hapus_transaksi',array(
			'model'=>$model,
		));
	}
	public function actionUbah()
	{
		$this->render('ubah_transaksi',array(
			'model'=>$this->loadId($id),
		));
		
	}
	public function actionCart($id)
	{
		$this->render('cart',array(
			'model'=>$this->loadUser($id),
		));
	}
	
	public function actionUbahdata($id)
	{
		$model=$this->loadId($id);
		$model2= new Transaksirincitbl;
		$this->render('ubah_transaksi',array(
			'model'=>$model,
			'model2'=>$model2,
		));
	}
	
	public function loadId($id)
{
	$model=Barangtbl::model()->findByPk($id);
	if($model===null)
		throw new CHttpException(404,'The requested pade does not exist.');
	return $model;
}

	
	public function loadUser($id)
	{
		$id = Yii::app()->user->name;
		$model=Pelanggantbl::model()->findByAttributes(array('username'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
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
		$model=new Pelanggantbl;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelanggantbl']))
		{
			$model->attributes=$_POST['Pelanggantbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	 
	 public function actionRegister()
	{
		$model=new Pelanggantbl;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelanggantbl']))
		{
			$model->attributes=$_POST['Pelanggantbl'];
			$model->save();
			$this->redirect(Yii::app()->homeUrl);
		}

		$this->render('register',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelanggantbl']))
		{
			$model->attributes=$_POST['Pelanggantbl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pelanggantbl');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pelanggantbl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelanggantbl']))
			$model->attributes=$_GET['Pelanggantbl'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pelanggantbl the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pelanggantbl::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pelanggantbl $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pelanggantbl-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
