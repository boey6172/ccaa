<?php
/* @var $this AthleteController */
/* @var $model Athlete */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Athlete', 'url'=>array('index')),
	array('label'=>'Manage Athlete', 'url'=>array('admin')),
);
?>

<h1>Create Athlete</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>