<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'Update Schedule', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>View Schedule #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		
		array(
			'name'=>'datetime_sched',
			'value'=>$model->getDateTime(),
		),
		array(
			'name'=>'event_id',
			'value'=>$model->Event->name,
		),
		
		array(
			'name'=>'cat_id',
			'value'=>$model->Category->name,
		),
		array(
			'name'=>'school_1',
			'value'=>$model->School_1->name,
		),

		array(
			'name'=>'school_2',
			'value'=>$model->School_2->name,
		),

		'venue',
		
		array(
			'name'=>'season_id',
			'value'=>$model->Seasons->number,
		),



	),
)); ?>