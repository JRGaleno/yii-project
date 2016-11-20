<?php
$this->breadcrumbs=array(
	'People'=>array('index'),
	$model->name=>array('view','id'=>$model->id_person),
	'Update',
);

$this->menu=array(
	array('label'=>'List person', 'url'=>array('index')),
	array('label'=>'Create person', 'url'=>array('create')),
	array('label'=>'View person', 'url'=>array('view', 'id'=>$model->id_person)),
	array('label'=>'Manage person', 'url'=>array('admin')),
);
?>

<h1>Update person <?php echo $model->id_person; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>