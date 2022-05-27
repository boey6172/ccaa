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
<?php echo $vm->season->theme . ' ' .'season' . $vm->season->number?>

<?php $this->renderPartial('_formSchool', array('model'=>$vm->sSchool)); ?>