<?php
$this->breadcrumbs=array(
	'Student Courses'=>array('index'),
	$model->id_student_course=>array('view','id'=>$model->id_student_course),
	'Update',
);

$this->menu=array(
	array('label'=>'List student_course', 'url'=>array('index')),
	array('label'=>'Create student_course', 'url'=>array('create')),
	array('label'=>'View student_course', 'url'=>array('view', 'id'=>$model->id_student_course)),
	array('label'=>'Manage student_course', 'url'=>array('admin')),
);
?>

<h1>Update student_course <?php echo $model->id_student_course; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>