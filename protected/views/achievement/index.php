<?php
/* @var $this AchievementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Achievements',
);

$this->menu=array(
	array('label'=>'Create Achievement', 'url'=>array('create')),
	array('label'=>'Manage Achievement', 'url'=>array('admin')),
);
?>

<h1>Achievements</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		
		'id',
		'athlete',
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
		array(
			'name'=>'school',
			'value'=>'$data->School->name',
		),
		'rank',
		's_achievement',
		
		array(
			'name'=>'season_id',
			'value'=>'$data->Seasons->number',
		),

		
		
	),
)); ?>