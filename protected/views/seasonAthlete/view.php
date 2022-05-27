<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */

$this->breadcrumbs=array(
	'Season Athletes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SeasonAthlete', 'url'=>array('index')),
	array('label'=>'Create SeasonAthlete', 'url'=>array('create')),
	array('label'=>'Update SeasonAthlete', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SeasonAthlete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeasonAthlete', 'url'=>array('admin')),
);
?>

<h1>View SeasonAthlete #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'season',
		'athlete',
	),
)); ?>
