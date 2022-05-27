<?php
/* @var $this SeasonSchoolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Season Schools',
);

$this->menu=array(
	array('label'=>'Create SeasonSchool', 'url'=>array('create')),
	array('label'=>'Manage SeasonSchool', 'url'=>array('admin')),
);
?>

<h1>Season Schools</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
