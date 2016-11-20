<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List course', 'url'=>array('index')),
	array('label'=>'Manage course', 'url'=>array('admin')),
);
?>

<h1>Create course</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>