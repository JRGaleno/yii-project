<?php
$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create country', 'url'=>array('create')),
	array('label'=>'Manage country', 'url'=>array('admin')),
);
?>

<h1>Countries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
