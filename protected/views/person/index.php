<?php
$this->breadcrumbs=array(
	'People',
);

$this->menu=array(
	array('label'=>'Create person', 'url'=>array('create')),
	array('label'=>'Manage person', 'url'=>array('admin')),
);
?>

<h1>People</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
