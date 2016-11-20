<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_course')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_course), array('view', 'id'=>$data->id_course)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />
        <p><?php echo CHtml::link('Acceso',array('Site/Login')); ?></p>

</div>