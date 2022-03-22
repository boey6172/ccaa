<?php
/* @var $this AnnouncementController */
/* @var $data Announcement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highlight')); ?>:</b>
	<?php echo CHtml::encode($data->highlight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_id')); ?>:</b>
	<?php echo CHtml::encode($data->season_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('crt_by')); ?>:</b>
	<?php echo CHtml::encode($data->crt_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crt_date')); ?>:</b>
	<?php echo CHtml::encode($data->crt_date); ?>
	<br />

	*/ ?>

</div>