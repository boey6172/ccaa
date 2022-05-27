<?php
/* @var $this SeasonEventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Season Events',
);

$this->menu=array(
	array('label'=>'Create SeasonEvent', 'url'=>array('create')),
	array('label'=>'Manage SeasonEvent', 'url'=>array('admin')),
);
?>

<h1>Season Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
