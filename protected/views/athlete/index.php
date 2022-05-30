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





<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'athlete-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		// 'id',
		'fname',
		'mname',
		'lname',
		'suffix',
		array(
			'name'=>'school',
			'value'=>'$data->School->name',
		),
		'birthday',
		'email',
		'cnum',
		array(
			'name'=>'gender',
			'value'=>'$data->Gender->name',
		 ),
		 
		 
		 array(
			'template' => '{view}{update}',
			'class' => 'CButtonColumn',
	),
	),
)); ?>


