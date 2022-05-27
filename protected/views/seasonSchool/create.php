<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */

$this->breadcrumbs=array(
	'Season Schools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeasonSchool', 'url'=>array('index')),
	array('label'=>'Manage SeasonSchool', 'url'=>array('admin')),
);
?>

<h1>Create SeasonSchool</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>