<?php
$this->breadcrumbs=array(
	'People'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List person', 'url'=>array('index')),
	array('label'=>'Manage person', 'url'=>array('admin')),
);
?>

<h1>Create person</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>