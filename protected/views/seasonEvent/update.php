<?php
/* @var $this SeasonEventController */
/* @var $model SeasonEvent */

$this->breadcrumbs=array(
	'Season Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeasonEvent', 'url'=>array('index')),
	array('label'=>'Create SeasonEvent', 'url'=>array('create')),
	array('label'=>'View SeasonEvent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeasonEvent', 'url'=>array('admin')),
);
?>

<h1>Update SeasonEvent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>