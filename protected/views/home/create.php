<?php
/* @var $this SeasonsController */
/* @var $model Seasons */

// $this->breadcrumbs=array(
// 	'Seasons'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List Seasons', 'url'=>array('index')),
// 	array('label'=>'Manage Seasons', 'url'=>array('admin')),
// );
// ?>

<h1>Create Seasons</h1>

<?php $this->renderPartial('_form', array('model'=>$vm->model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seasons-grid',
	'dataProvider'=>$vm->model->search(),
	// 'filter'=>$vm->model,
	'columns'=>array(
		// 'id',
		'number',
		'theme',

		array(
			'name'  => 'theme',
			'value' => 'CHtml::link($data->theme,Yii::app()->createUrl("home/addevent",array("id"=>$data->id)))',
			'type'  => 'raw',
	),
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>