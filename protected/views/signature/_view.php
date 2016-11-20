<div class="view">

	<!--/b>
        <!?php echo CHtml::encode($data->getAttributeLabel('id_signature')); ?>:</b>
	<!?php echo CHtml::link(CHtml::encode($data->id_signature), array('view', 'id'=>$data->id_signature)); ?>
	<br /-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<!--b>
        <!--?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<!--?php echo CHtml::encode($data->code); ?>
	<br /-->


</div>