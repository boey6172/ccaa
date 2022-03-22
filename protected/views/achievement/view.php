<?php
/* @var $this AchievementController */
/* @var $model Achievement */

$this->breadcrumbs=array(
	'Achievements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Achievement', 'url'=>array('index')),
	array('label'=>'Create Achievement', 'url'=>array('create')),
	array('label'=>'Update Achievement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Achievement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Achievement', 'url'=>array('admin')),
);
?>

<h1>View Achievement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',

		array(
			'name'=>'Season',
			'value'=>$model->Seasons->number,
		), 	

		'athlete',

		array(
			'name'=>'event_id',
			'value'=>$model->Event->name,
		),
		
		array(
			'name'=>'cat_id',
			'value'=>$model->Category->name,
		),
		array(
			'name'=>'school',
			'value'=>$model->School->name,
		),
		
		'rank',
		's_achievement',
		
	),
)); ?>
