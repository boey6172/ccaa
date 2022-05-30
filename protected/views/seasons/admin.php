<?php
/* @var $this SeasonsController */
/* @var $model Seasons */

$this->breadcrumbs=array(
	'Seasons'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Seasons', 'url'=>array('index')),
	array('label'=>'Create Seasons', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#seasons-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Seasons</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seasons-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		'number',
		'theme',
		array(
			'template' => '{view}{update}',
			'class' => 'CButtonColumn',
	),
	),
)); ?>
