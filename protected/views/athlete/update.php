<?php
/* @var $this AthleteController */
/* @var $model Athlete */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Athlete', 'url'=>array('index')),
	array('label'=>'Create Athlete', 'url'=>array('create')),
	array('label'=>'View Athlete', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Athlete', 'url'=>array('admin')),
);
?>

<h1>Update Athlete <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>