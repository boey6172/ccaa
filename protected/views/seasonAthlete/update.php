<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */

$this->breadcrumbs=array(
	'Season Athletes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeasonAthlete', 'url'=>array('index')),
	array('label'=>'Create SeasonAthlete', 'url'=>array('create')),
	array('label'=>'View SeasonAthlete', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeasonAthlete', 'url'=>array('admin')),
);
?>

<h1>Update SeasonAthlete <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>