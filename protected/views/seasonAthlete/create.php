<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */

$this->breadcrumbs=array(
	'Season Athletes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeasonAthlete', 'url'=>array('index')),
	array('label'=>'Manage SeasonAthlete', 'url'=>array('admin')),
);
?>

<h1>Create SeasonAthlete</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>