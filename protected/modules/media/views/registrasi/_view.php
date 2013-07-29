<?php
/* @var $this RegistrasiController */
/* @var $data Registrasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_num')); ?>:</b>
	<?php echo CHtml::encode($data->passport_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media_name')); ?>:</b>
	<?php echo CHtml::encode($data->media_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_address')); ?>:</b>
	<?php echo CHtml::encode($data->company_address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('company_desc')); ?>:</b>
	<?php echo CHtml::encode($data->company_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_num')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_graph')); ?>:</b>
	<?php echo CHtml::encode($data->photo_graph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('letter_of_assignment')); ?>:</b>
	<?php echo CHtml::encode($data->letter_of_assignment); ?>
	<br />

	*/ ?>

</div>