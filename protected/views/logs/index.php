<?php
/* @var $this LogsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logs',
);

$this->menu=array(
	array('label'=>'Create Logs', 'url'=>array('create')),
	array('label'=>'Manage Logs', 'url'=>array('admin')),
);
?>

<h1>Logs</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
	
		'id',
		array(
			'name'=>'user',
			'value'=>'$data->User->fullName()',
		),
		'action',
		
	),
)); ?>

