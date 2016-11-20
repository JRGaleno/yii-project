<?php
$this->breadcrumbs=array(
	'People'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List person', 'url'=>array('index')),
	array('label'=>'Create person', 'url'=>array('create')),
	array('label'=>'Update person', 'url'=>array('update', 'id'=>$model->id_person)),
	array('label'=>'Delete person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_person),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage person', 'url'=>array('admin')),
);
?>

<h1>View person #<?php echo $model->id_person; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_person',
		'name',
		'lastname',
		'role',
		'user',
		'pass',
		'birthday',
		'id_gender',
		'id_studies',
		'id_country_current',
		'id_civil_estatus',
		'id_country_origin',
		'status',
	),
)); ?>
