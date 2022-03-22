<?php
/* @var $this AthleteController */
/* @var $model Athlete */

$this->breadcrumbs=array(
	'Athletes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Athlete', 'url'=>array('index')),
	array('label'=>'Create Athlete', 'url'=>array('create')),
	array('label'=>'Update Athlete', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Athlete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Athlete', 'url'=>array('admin')),
);
?>

<h1>View Athlete #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			'id',
			'fname',
			'mname',
			'lname',
			'suffix',
			'birthday',
			'email',
			'cnum',
			'street',
			'barangay',
			'city_municipality',
			'province',
			'psa',
			'coe',
			'waiver',
			'cog',
			'medical',
			array(
				'name'=>'gender',
				'value'=>$model->Gender->name,
			),
			
			array(
				'name'=>'school',
				'value'=>$model->School->name,
			),
			array(
				'name'=>'Season',
				'value'=>$model->Seasons->number,
			),
			
			
		),
	)); ?>

