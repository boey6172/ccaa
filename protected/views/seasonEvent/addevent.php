<?php
/* @var $this SeasonEventController */
/* @var $model SeasonEvent */

$this->breadcrumbs=array(
	'Season Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeasonEvent', 'url'=>array('index')),
	array('label'=>'Manage SeasonEvent', 'url'=>array('admin')),
);
?>

<h1>Create SeasonEvent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>