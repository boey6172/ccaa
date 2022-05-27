<?php
/* @var $this SeasonAthleteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Season Athletes',
);

$this->menu=array(
	array('label'=>'Create SeasonAthlete', 'url'=>array('create')),
	array('label'=>'Manage SeasonAthlete', 'url'=>array('admin')),
);
?>

<h1>Season Athletes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
