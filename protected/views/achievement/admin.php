<?php
/* @var $this AchievementController */
/* @var $model Achievement */

$this->breadcrumbs=array(
	'Achievements'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Achievement', 'url'=>array('index')),
	array('label'=>'Create Achievement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#achievement-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Achievements</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'achievement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'id',
		'athlete',
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
		array(
			'name'=>'school',
			'value'=>'$data->School->name',
		),

		'rank',
		
		's_achievement',

		array(
			'name'=>'season_id',
			'value'=>'$data->Seasons->number',
		),
		
		

		
		array(
			'template' => '{view}{update}',
			'class' => 'CButtonColumn',
	),
	),
)); ?>
