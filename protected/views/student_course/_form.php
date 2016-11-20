<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-course-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_student'); ?>
		<?php echo $form->textField($model,'id_student'); ?>
		<?php echo $form->error($model,'id_student'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_course'); ?>
		<?php echo $form->textField($model,'id_course'); ?>
		<?php echo $form->error($model,'id_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
		<?php echo $form->error($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->