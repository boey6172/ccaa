<?php
/* @var $this AchievementController */
/* @var $model Achievement */

$this->breadcrumbs=array(
	'Achievements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Achievement', 'url'=>array('index')),
	array('label'=>'Manage Achievement', 'url'=>array('admin')),
);
?>

<h1>Create Achievement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>