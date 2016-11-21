<?php
$script ='
    $(\'.page\').click(function(){
        submitForm(this);
        return false;
    });
    $(\'.first\').click(function(){
        submitForm(this);
        return false;
    });
    $(\'.previous\').click(function(){
        submitForm(this);
        return false;
    });
    $(\'.next\').click(function(){
        submitForm(this);
        return false;
    });
    $(\'.last\').click(function(){
        submitForm(this);
        return false;
    });         
    function submitForm(obj)
    {
        var href = $(obj).find(\'a\').attr(\'href\');
        var pos = href.indexOf(\'page/\');
        var page = 1;
        if(pos > 0)
            page = href.substring(pos + 5);
        $(\'#page\').val(page);
        $(\'#myform\').submit();
    }
';
Yii::app()->clientScript->registerScript('script', $script);
?>
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'myform',
            'enableClientValidation'=>false,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>
        <?= CHtml::hiddenField('page', ''); ?>
        <?php $this->widget('zii.widgets.CListView', array(
            'ajaxUpdate'=>false,
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
            'template'=>"{items}\n{pager}",
        )); ?>
		<?php 
                $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
    ),
));

    //echo CHtml::checkBox('student_course[ResumeID][{$data->ResumeID}]',false,array('value'=>$data->ResumeID));

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('open dialog', '#', array(
   'onclick'=>'$("#mydialog").dialog("open"); return false;',
));
                ; ?>
<?php $this->endWidget(); ?>

<?php //echo $form->checkBoxList($model, 'type', array('type A'=>'Type A','type B'=>'Type B','type C'=>'Type C')); ?>