<?php
/* @var $this SeasonEventController */
/* @var $model SeasonEvent */

// $this->breadcrumbs=array(
// 	'Season Events'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List SeasonEvent', 'url'=>array('index')),
// 	array('label'=>'Manage SeasonEvent', 'url'=>array('admin')),
// );
// ?>

<h1>Create SeasonEvent</h1>
<h1><?php echo $vm->season->theme . ' ' .'season' . $vm->season->number?></h1>

<?php $this->renderPartial('_formEvent', array('model'=>$vm->sEvent)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seasons-event-grid',
	'dataProvider'=>$vm->sEvent->search(),
	// 'filter'=>$vm->model,
	'columns'=>array(
		// 'id',
		// 'event',
		// 'season',
    // array(
		// 	'name'=>'season_theme',
		// 	'value'=>'$data->Season->theme',
		// ),
		array(
			'name'=>'Events',
			'value'=>'$data->Event->name',
		),
    array(
			'name'=>'Category',
			'value'=>'$data->Category->name',
		),
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>