<?php
$this->breadcrumbs=array(
	'Courses',
);

$this->menu=array(
	array('label'=>'Create course', 'url'=>array('create')),
	array('label'=>'Manage course', 'url'=>array('admin')),
);
?>

<h1>Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
