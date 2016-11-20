<?php
$this->breadcrumbs=array(
	'Signatures'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List signature', 'url'=>array('index')),
	array('label'=>'Create signature', 'url'=>array('create')),
	array('label'=>'Update signature', 'url'=>array('update', 'id'=>$model->id_signature)),
	array('label'=>'Delete signature', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_signature),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage signature', 'url'=>array('admin')),
);
?>

<h1>View signature #<?php echo $model->id_signature; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_signature',
		'name',
		'code',
	),
)); ?>
