<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>		
                <?php echo CHtml::dropDownList('Roles', null, array('STUDENT' => 'STUDENT', 'PROFESOR' => 'PROFESOR'),array('empty' => 'Select a role')); ?>  
                <?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->dropDownList($model,'id_gender', CHtml::listData(gender::model()->findAll(), 'id_gender', 'name'), array('empty'=>'select a gender')); ?>                   
		<?php echo $form->error($model,'id_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Level of studies'); ?>
		<?php echo $form->dropDownList($model,'id_studies', CHtml::listData(studies::model()->findAll(), 'id_studies', 'name'), array('empty'=>'select a type')); ?>
		<?php echo $form->error($model,'id_studies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Current country'); ?>
		<?php echo $form->dropDownList($model,'id_country_current', CHtml::listData(country::model()->findAll(), 'id_country', 'name'), array('empty'=>'select a country')); ?>
		<?php echo $form->error($model,'id_country_current'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Civil status'); ?>
		<?php echo $form->dropDownList($model,'id_civil_estatus', CHtml::listData(country::model()->findAll(), 'id_country', 'name'), array('empty'=>'select a country')); ?>
		<?php echo $form->error($model,'id_civil_estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Origin country'); ?>
		<?php echo $form->dropDownList($model,'id_country_origin', CHtml::listData(country::model()->findAll(), 'id_country', 'name'), array('empty'=>'select a country')); ?>
		<?php echo $form->error($model,'id_country_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::dropDownList('status', 'ACTIVO' , array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'),array('empty' => 'Select a status')); ?>  
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->