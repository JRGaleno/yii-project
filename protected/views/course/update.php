<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name=>array('view','id'=>$model->id_course),
	'Update',
);

$this->menu=array(
	array('label'=>'List course', 'url'=>array('index')),
	array('label'=>'Create course', 'url'=>array('create')),
	array('label'=>'View course', 'url'=>array('view', 'id'=>$model->id_course)),
	array('label'=>'Manage course', 'url'=>array('admin')),
);
?>

<h1>Update course <?php echo $model->id_course; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>