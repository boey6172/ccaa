<?php
/* @var $this AchievementController */
/* @var $model Achievement */

$this->breadcrumbs=array(
	'Achievements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Achievement', 'url'=>array('index')),
	array('label'=>'Create Achievement', 'url'=>array('create')),
	array('label'=>'View Achievement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Achievement', 'url'=>array('admin')),
);
?>

<h1>Update Achievement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>