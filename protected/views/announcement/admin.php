<?php
/* @var $this AnnouncementController */
/* @var $model Announcement */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Announcement', 'url'=>array('index')),
	array('label'=>'Create Announcement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#announcement-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Announcements</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'announcement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'description',
		'highlight',
		'pic',
		array(
			'name'=>'event_id',
			'value'=>'$data->Event->name',
		),
		
		array(
			'name'=>'cat_id',
			'value'=>'$data->Category->name',
		),
		
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
