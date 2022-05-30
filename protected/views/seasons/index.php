<?php
/* @var $this SeasonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seasons',
);

$this->menu=array(
	array('label'=>'Create Seasons', 'url'=>array('create')),
	array('label'=>'Manage Seasons', 'url'=>array('admin')),
);
?>

<h1>Seasons</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$dataProvider,
	// 'filter'=>$dataProvider,
	'columns'=>array(
		// 'id',
		'number',
		'theme',
		/*
		'email',
		'street',
		'barangay',
		'city_municipality',
		'province',
		'psa',
		'coe',
		'waiver',
		'cog',
		'medical',
		'gender',
		*/
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>