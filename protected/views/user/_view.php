<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->user_id)); ?>
	<!-- <?php echo CHtml::encode($data->username); ?> -->
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('profile_pic')); ?>:</b>
	<?php echo CHtml::encode($data->profile_pic); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_activated')); ?>:</b>
	<?php echo CHtml::encode($data->is_activated); ?>
	<br />

	*/ ?>

</div>