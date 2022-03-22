<?php
/* @var $this AchievementController */
/* @var $data Achievement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_id')); ?>:</b>
	<?php echo CHtml::encode($data->season_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('athlete')); ?>:</b>
	<?php echo CHtml::encode($data->athlete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school')); ?>:</b>
	<?php echo CHtml::encode($data->school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank')); ?>:</b>
	<?php echo CHtml::encode($data->rank); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('s_achievement')); ?>:</b>
	<?php echo CHtml::encode($data->s_achievement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crt_date')); ?>:</b>
	<?php echo CHtml::encode($data->crt_date); ?>
	<br />

	

</div>