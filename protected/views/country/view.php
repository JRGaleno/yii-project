<?php
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List country', 'url'=>array('index')),
	array('label'=>'Create country', 'url'=>array('create')),
	array('label'=>'Update country', 'url'=>array('update', 'id'=>$model->id_country)),
	array('label'=>'Delete country', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_country),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage country', 'url'=>array('admin')),
);
?>

<h1>View country #<?php echo $model->id_country; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_country',
		'name',
		'code',
	),
)); ?>
