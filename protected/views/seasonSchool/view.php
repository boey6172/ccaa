<?php
/* @var $this SeasonSchoolController */
/* @var $model SeasonSchool */

$this->breadcrumbs=array(
	'Season Schools'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SeasonSchool', 'url'=>array('index')),
	array('label'=>'Create SeasonSchool', 'url'=>array('create')),
	array('label'=>'Update SeasonSchool', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SeasonSchool', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeasonSchool', 'url'=>array('admin')),
);
?>

<h1>View SeasonSchool #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'season',
		'school',
	),
)); ?>
