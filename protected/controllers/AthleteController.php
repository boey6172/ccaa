<?php

class AthleteController extends Controller
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
			// array('allow',  // allow all users to perform 'index' and 'view' actions
			// 	'actions'=>array('index','view','upload'),
			// 	'users'=>array('*'),
			// ),
			// array('allow', // allow authenticated user to perform 'create' and 'update' actions
			// 	'actions'=>array('create','update'),
			// 	'users'=>array('@'),
			// ),
			// array('allow', // allow admin user to perform 'admin' and 'delete' actions
			// 	'actions'=>array('admin','delete'),
			// 	'users'=>array('admin'),
			// ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','upload','admin','delete'),
				'roles'=>array('Co-Admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','index','view','upload','admin','delete'),
				'roles'=>array('rxAdmin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
			'actions'=>array('update','index','view','upload','admin','delete'),
			'roles'=>array('school-co'),
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

	public function actionUpload()
	{
		$alert = (object) array();
		$alert->context = 'danger';
		$alert->messages = '';

		$retVal = 'error';
		$retMessage = 'error';

		// CHECKING POST DATA
		if(isset($_POST['Athlete']))
		{
				$temp = new Athlete('search');
				$temp->attributes = $_POST['Athlete'];

				$model=Athlete::model()->findByPk($temp->id);

				$athlete_file = CUploadedFile::getInstance($temp,'psa');

				if($athlete_file != "")
				{


						// CHEKING FILE EXTENSION

								$temp_path = "uploads/";
								$file_name = date('YmdHis') . $athlete_file->name;
								$model->type = $temp->type;

								// SAVING FILE TEMP FOLDER
								if($athlete_file->saveAs($temp_path . $file_name))
								{
									if($model->type == 1){
										$model->psa = $file_name;
										if($model->save())
										{
											$retMessage = 'done';
											$retVal = 'success';
										}	
									}
									elseif($model->type == 2){
										$model->coe = $file_name;
										if($model->save())
										{
											$retMessage = 'done';
											$retVal = 'success';
										}	
									}
									elseif($model->type == 3){
										$model->waiver = $file_name;
										if($model->save())
										{
											$retMessage = 'done';
											$retVal = 'success';
										}	
									}
									elseif($model->type == 4){
										$model->cog = $file_name;
										if($model->save())
										{
											$retMessage = 'done';
											$retVal = 'success';
										}	
									}
									elseif($model->type == 5){
										$model->medical = $file_name;
										if($model->save())
										{
											$retMessage = 'done';
											$retVal = 'success';
										}	
									}else{
										$retMessage = 'error1';
										$retVal = 'error1';
									}
							

								}
								else
								{
										$alert->messages = 'Ooops, error in uploading';
								}

				}
				else
				{
						$alert->messages = "Woops, Did you forget the file.";
				}
		}


		$this->renderPartial('/json/json_ret', array(
				'retVal' => $retVal,
				'retMessage' => $retMessage,
		));
	}



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Athlete;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Athlete']))
		{
			$model->attributes=$_POST['Athlete'];
			if($model->save())
			{
				$action = "Created new Athlete";
				$this->History($action);

				$this->redirect(array('view','id'=>$model->id));
			}
				
			
			
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

		if(isset($_POST['Athlete']))
		{

			$model->attributes=$_POST['Athlete'];
			if($model->save())
			{
				$action = "Updated Athlete";
				$this->History($action);

				$this->redirect(array('view','id'=>$model->id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		{
			$action = "Deleted Athlete";
			$this->History($action);

			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));

			

		}
			
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		// $dataProvider=new CActiveDataProvider('Athlete');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));

		$model=new Athlete('search');


		// $model->unsetAttributes();  // clear any default values
		// // if(isset($_GET['Athlete']))
		$checkSchool= User::model()->findByAttributes(array('user_id'=>Yii::app()->user->Id)) ;

		// 	// $model->attributes=$_GET['Athlete'];
			if ($checkSchool->school != '')
					$model = 	Athlete::model()->findByAttributes(array('school'=>$checkSchool->school));
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Athlete('search');


		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Athlete']))
			$model->attributes=$_GET['Athlete'];
	
			$checkSchool= User::model()->findByAttributes(array('user_id'=>Yii::app()->user->Id)) ;
			if ($checkSchool->school != '')
				$model = 	Athlete::model()->findByAttributes(array('school'=>$checkSchool->school));

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Athlete the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Athlete::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Athlete $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='athlete-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function History($action)
	{
		$vm = (object)	array();
		$vm->History = new Logs('search');

		if(isset($action))
		{
			$vm->History->action= $action;
			$vm->History->save();


		}
		else
		{
			return false;
		}
	}
}
