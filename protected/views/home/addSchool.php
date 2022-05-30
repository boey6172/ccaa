<?php
/* @var $this SchoolController */
/* @var $model School */

// $this->breadcrumbs=array(
// 	'Schools'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List School', 'url'=>array('index')),
// 	array('label'=>'Manage School', 'url'=>array('admin')),
// );
// ?>

<h1>Add School To Season</h1>
<h1>
<?php echo $vm->season->theme . ' ' .'season' . $vm->season->number?>
</h1>
<?php $this->renderPartial('_formSchool', array('model'=>$vm->sSchool)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seasons-school-grid',
	'dataProvider'=>$vm->sSchool->search(),
	// 'filter'=>$vm->model,
	'columns'=>array(
		// 'id',
		// 'event',
		// 'season',
    array(
			'name'=>'School',
			'value'=>'$data->School->name',
		),
		// array(
		// 	'name'=>'Events',
		// 	'value'=>'$data->Event->name',
		// ),
    // array(
		// 	'name'=>'Category',
		// 	'value'=>'$data->Category->name',
		// ),
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>