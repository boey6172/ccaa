<?php
/* @var $this SeasonEventController */
/* @var $model SeasonEvent */

$this->breadcrumbs=array(
	'Season Events'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SeasonEvent', 'url'=>array('index')),
	array('label'=>'Create SeasonEvent', 'url'=>array('create')),
	array('label'=>'Update SeasonEvent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SeasonEvent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeasonEvent', 'url'=>array('admin')),
);
?>

<h1>View SeasonEvent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event',
		'season',
	),
)); ?>
