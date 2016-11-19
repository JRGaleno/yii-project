<?php
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->name=>array('view','id'=>$model->id_country),
	'Update',
);

$this->menu=array(
	array('label'=>'List country', 'url'=>array('index')),
	array('label'=>'Create country', 'url'=>array('create')),
	array('label'=>'View country', 'url'=>array('view', 'id'=>$model->id_country)),
	array('label'=>'Manage country', 'url'=>array('admin')),
);
?>

<h1>Update country <?php echo $model->id_country; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>