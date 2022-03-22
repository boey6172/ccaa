<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Categories</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'event-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		'id',
		'name',
		array(
			'name'=>'Event_id',
			'value'=>'$data->Event->name',
		),
			
		
	),
)); ?>
