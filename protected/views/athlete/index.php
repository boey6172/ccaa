<?php
/* @var $this AthleteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Athletes',
);

$this->menu=array(
	array('label'=>'Create Athlete', 'url'=>array('create')),
	array('label'=>'Manage Athlete', 'url'=>array('admin')),
);
?>

<h1>Athletes</h1>

<!-- <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?> -->



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		'id',
		array(
			'name'=>'Name',
			'value'=>'$data->getFullName()',
		),
		'suffix',
		array(
			'name'=>'school',
			'value'=>'$data->School->name',
		),
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),

	),
)); ?>


