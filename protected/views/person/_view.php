<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_person')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_person), array('view', 'id'=>$data->id_person)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass')); ?>:</b>
	<?php echo CHtml::encode($data->pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gender')); ?>:</b>
	<?php echo CHtml::encode($data->id_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_studies')); ?>:</b>
	<?php echo CHtml::encode($data->id_studies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_country_current')); ?>:</b>
	<?php echo CHtml::encode($data->id_country_current); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_civil_estatus')); ?>:</b>
	<?php echo CHtml::encode($data->id_civil_estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_country_origin')); ?>:</b>
	<?php echo CHtml::encode($data->id_country_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>