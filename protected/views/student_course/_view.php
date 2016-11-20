<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_student_course')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_student_course), array('view', 'id'=>$data->id_student_course)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_student')); ?>:</b>
	<?php echo CHtml::encode($data->id_student); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_course')); ?>:</b>
	<?php echo CHtml::encode($data->id_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->id_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>