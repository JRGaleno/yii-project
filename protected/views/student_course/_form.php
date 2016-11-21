<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-course-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'id_student',['value'=>yii::app()->user->getId()]); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_course'); ?>
                <?php echo $form->dropDownList($model,'id_course', CHtml::listData(course::model()->findAll(), 'id_course', 'name'), array('empty'=>'select a course')); ?> 
		<?php echo $form->error($model,'id_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_profesor'); ?>
		<?php echo $form->dropDownList($model,'id_profesor', CHtml::listData(person::model()->findAll(), 'id_person', 'name'), array('empty'=>'select a profesor')); ?>
		<?php echo $form->error($model,'id_profesor'); ?>
	</div>

	<div class="row">
                <?php echo $form->hiddenField($model,'status',['value'=>'matriculate']); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->