<?php
/* @var $this SchoolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schools',
);

$this->menu=array(
	array('label'=>'Create School', 'url'=>array('create')),
	array('label'=>'Manage School', 'url'=>array('admin')),
);
?>

<h1>Schools</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'school-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		'id',
		'name',
		'acr',
		'logo',
		'address',
		
	),
)); ?>
