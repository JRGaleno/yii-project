<?php
$this->breadcrumbs=array(
	'Student Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List student_course', 'url'=>array('index')),
	array('label'=>'Manage student_course', 'url'=>array('admin')),
);
?>

<h1>Create student_course</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>