<?php
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List country', 'url'=>array('index')),
	array('label'=>'Manage country', 'url'=>array('admin')),
);
?>

<h1>Create country</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>