<?php
$this->breadcrumbs=array(
	'Student Courses',
);

$this->menu=array(
	array('label'=>'Create student_course', 'url'=>array('create')),
	array('label'=>'Manage student_course', 'url'=>array('admin')),
);
?>

<h1>Student Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
