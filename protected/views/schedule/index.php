<?php
/* @var $this ScheduleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schedules',
);

$this->menu=array(
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>Schedules</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		
		'id',
		
		array(
			'name'=>'event_id',
			'value'=>'$data->getDateTime()',
		),
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
		array(
			'name'=>'Schools',
			'value'=>'$data->getVs()',
		
		),

		'venue',
		
		array(
			'name'=>'Season',
			'value'=>'$data->Seasons->number',
		),
		
		
	),
)); ?>
