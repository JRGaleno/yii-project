<?php
$this->breadcrumbs=array(
	'Signatures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List signature', 'url'=>array('index')),
	array('label'=>'Manage signature', 'url'=>array('admin')),
);
?>

<h1>Create signature</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>