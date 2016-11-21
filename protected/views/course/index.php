<?php
$this->breadcrumbs=array(
	'Courses',
);

$this->menu=array(
	array('label'=>'Create course', 'url'=>array('create')),
	array('label'=>'Manage course', 'url'=>array('admin')),
);
?>

<h1>Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
        'modal' => 'true',
        'close' => 'js:function(){ $(document).off("click", "#id-gridview .items > tbody > ), tr"); }'
    ),
));

    echo 'dialog content here';

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('open dialog', '#', array(
   'onclick'=>'$("#mydialog").dialog("open"); return false;',
));
 ?>

