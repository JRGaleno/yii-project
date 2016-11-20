<?php
$this->breadcrumbs=array(
	'Student Courses'=>array('index'),
	$model->id_student_course,
);

$this->menu=array(
	array('label'=>'List student_course', 'url'=>array('index')),
	array('label'=>'Create student_course', 'url'=>array('create')),
	array('label'=>'Update student_course', 'url'=>array('update', 'id'=>$model->id_student_course)),
	array('label'=>'Delete student_course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_student_course),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage student_course', 'url'=>array('admin')),
);
?>

<h1>View student_course #<?php echo $model->id_student_course; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_student',
		'id_course',
		'grade',
		'id_profesor',
		'status',
		'id_student_course',
	),
)); ?>
