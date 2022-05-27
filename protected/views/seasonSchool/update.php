<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */

$this->breadcrumbs=array(
	'Season Schools'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeasonSchool', 'url'=>array('index')),
	array('label'=>'Create SeasonSchool', 'url'=>array('create')),
	array('label'=>'View SeasonSchool', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeasonSchool', 'url'=>array('admin')),
);
?>

<h1>Update SeasonSchool <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>