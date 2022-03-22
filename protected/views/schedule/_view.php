<?php
/* @var $this ScheduleController */
/* @var $data Schedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime_sched')); ?>:</b>
	<?php echo CHtml::encode($data->getDateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_1')); ?>:</b>
	<?php echo CHtml::encode($data->school_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_2')); ?>:</b>
	<?php echo CHtml::encode($data->school_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_id')); ?>:</b>
	<?php echo CHtml::encode($data->season_id); ?>
	<br />


</div>