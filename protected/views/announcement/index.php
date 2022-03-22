<?php
/* @var $this AnnouncementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Announcements',
);

$this->menu=array(
	array('label'=>'Create Announcement', 'url'=>array('create')),
	array('label'=>'Manage Announcement', 'url'=>array('admin')),
);
?>

<h1>Announcements</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		
		'id',
		'highlight',
		'description',
		'pic',
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
		array(
			'name'=>'season_id',
			'value'=>'$data->Seasons->number',
		),
		

		
		
	),
)); ?>