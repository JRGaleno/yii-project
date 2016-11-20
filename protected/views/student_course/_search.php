<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_student'); ?>
		<?php echo $form->textField($model,'id_student'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_course'); ?>
		<?php echo $form->textField($model,'id_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_student_course'); ?>
		<?php echo $form->textField($model,'id_student_course',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->