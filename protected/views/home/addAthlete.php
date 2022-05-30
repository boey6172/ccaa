<?php
/* @var $this SeasonAthleteController */
/* @var $model SeasonAthlete */

// $this->breadcrumbs=array(
// 	'Season Athletes'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List SeasonAthlete', 'url'=>array('index')),
// 	array('label'=>'Manage SeasonAthlete', 'url'=>array('admin')),
// );
// ?>

<h1>Create Season Athlete</h1>
<h1>
  <?php echo $vm->season->theme . ' ' .'season' . $vm->season->number?>
</h1>

<?php $this->renderPartial('_formAthlete', array('model'=>$vm->sSchool)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seasons-athlete-grid',
	'dataProvider'=>$vm->sSchool->search(),
	// 'filter'=>$vm->model,
	'columns'=>array(
		// 'id',
		// 'event',
		// 'season',
    array(
			'name'=>'Athlete',
			'value'=>'$data->Athlete->getFullName()',
		),
		array(
			'name'=>'School',
			'value'=>'$data->Athlete->School->name',
		),
		array(
			'name'=>'Events',
			'value'=>'$data->Athlete->Event->name',
		),
    // array(
		// 	'name'=>'Category',
		// 	'value'=>'$data->Category->name',
		// ),
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>