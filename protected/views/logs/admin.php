<?php
/* @var $this LogsController */
/* @var $model Logs */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Logs', 'url'=>array('index')),
	array('label'=>'Create Logs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#logs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Logs</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'logs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		// 'user',
		array(
			'name'=>'user',
			'value'=>'$data->User->fullName()',
		),
		'action',
		array(
			'template' => '{view}{update}',
			'class' => 'CButtonColumn',
	),
	),
)); ?>
