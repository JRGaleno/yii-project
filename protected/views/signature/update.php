<?php
$this->breadcrumbs=array(
	'Signatures'=>array('index'),
	$model->name=>array('view','id'=>$model->id_signature),
	'Update',
);

$this->menu=array(
	array('label'=>'List signature', 'url'=>array('index')),
	array('label'=>'Create signature', 'url'=>array('create')),
	array('label'=>'View signature', 'url'=>array('view', 'id'=>$model->id_signature)),
	array('label'=>'Manage signature', 'url'=>array('admin')),
);
?>

<h1>Update signature <?php echo $model->id_signature; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>