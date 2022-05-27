<?php

class HomeController extends Controller
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
				'actions'=>array('index','view','SeasonSave','addEvent','EventSave','AddSchool','SchoolSave','AddAthlete','AthleteSave'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','AddEvent'),
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
		$model=new Seasons;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Seasons']))
		{
			$model->attributes=$_POST['Seasons'];
			if($model->save())
			{
				$action = "Created new School";
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

		if(isset($_POST['Seasons']))
		{
			$model->attributes=$_POST['Seasons'];
			if($model->save())
			{
				$action = "Updated School";
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
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$vm =(object) array();
		$vm->model=new Seasons;

		$this->render('create',array(
			'vm'=>$vm,
		));
	}
	public function actionSeasonSave()
	{
		$vm =(object) array();
		$vm->model=new Seasons;
		$vm->sEvent = new SeasonEvent;
		$retVal = 'error';

		if(isset($_POST['Seasons']))
		{
			$vm->model->attributes=$_POST['Seasons'];
			if($vm->model->save())
			{
				$action = "Created new Season";
				$this->History($action);
				$retVal = 'success';

				$this->renderPartial('/json/json_ret', array(
					'retVal' => $retVal,
					'retMessage' => $vm->model->id,
				));
			}
				
		}
	}


	public function actionAddEvent($id)
	{
		$vm =(object) array();
		$vm->sEvent = new SeasonEvent;

		$vm->season = Seasons::model()->findByPk($id);
		$vm->sEvent->season = $id;

				$this->render('addevent',array(
					'vm'=>$vm,
				));
	}

	public function actionEventSave()
	{
		$vm =(object) array();
		$vm->model=new SeasonEvent;
		// $vm->sEvent = new SeasonEvent;
		$retVal = 'error';

		if(isset($_POST['SeasonEvent']))
		{
			$vm->model->attributes=$_POST['SeasonEvent'];
			if($vm->model->save())
			{
				$action = "Created new Season event";
				$this->History($action);
				$retVal = 'success';

				$this->renderPartial('/json/json_ret', array(
					'retVal' => $retVal,
					'retMessage' => $vm->model->id,
				));
			}
				
		}
	}

	public function actionAddSchool($id)
	{
		$vm =(object) array();
		$vm->sSchool = new SeasonSchool;

		$vm->season = Seasons::model()->findByPk($id);
		$vm->sSchool->season = $id;

				$this->render('addSchool',array(
					'vm'=>$vm,
				));
	}
	public function actionSchoolSave()
	{
		$vm =(object) array();
		$vm->model=new SeasonSchool;
		// $vm->sEvent = new SeasonEvent;
		$retVal = 'error';

		if(isset($_POST['SeasonSchool']))
		{
			$vm->model->attributes=$_POST['SeasonSchool'];
			if($vm->model->save())
			{
				$action = "Created new Season School";
				$this->History($action);
				$retVal = 'success';

				$this->renderPartial('/json/json_ret', array(
					'retVal' => $retVal,
					'retMessage' => $vm->model->id,
				));
			}
				
		}
	}
	public function actionAddAthlete($id)
	{
		$vm =(object) array();
		$vm->sSchool = new SeasonAthlete;

		$vm->season = Seasons::model()->findByPk($id);
		$vm->sSchool->season = $id;

				$this->render('addAthlete',array(
					'vm'=>$vm,
				));
	}
	public function actionAthleteSave()
	{
		$vm =(object) array();
		$vm->model=new SeasonAthlete;
		// $vm->sEvent = new SeasonEvent;
		$retVal = 'error';

		if(isset($_POST['SeasonAthlete']))
		{
			$vm->model->attributes=$_POST['SeasonAthlete'];
			if($vm->model->save())
			{
				$action = "Created new Season School";
				$this->History($action);
				$retVal = 'success';

				$this->renderPartial('/json/json_ret', array(
					'retVal' => $retVal,
					'retMessage' => $vm->model->id,
				));
			}
				
		}
	}


	/**
	 * Performs the AJAX validation.
	 * @param Seasons $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='seasons-form')
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
