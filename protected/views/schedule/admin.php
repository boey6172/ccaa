<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#schedule-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Schedules</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); 
print_r($model)

?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'schedule-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		
		array(
			'name'=>'event_id',
			'value'=>'$data->getDateTime()',
		),
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
		array(
			'name'=>'school_2',
			'value'=>'$data->School_2->name',
		),
		array(
			'name'=>'school_1',
			'value'=>'$data->School_1->name',
		),

		'venue',
		
		array(
			'name'=>'season_id',
			'value'=>'$data->Seasons->number',
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
