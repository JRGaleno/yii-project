<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List course', 'url'=>array('index')),
	array('label'=>'Create course', 'url'=>array('create')),
	array('label'=>'Update course', 'url'=>array('update', 'id'=>$model->id_course)),
	array('label'=>'Delete course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_course),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage course', 'url'=>array('admin')),
);
?>

<h1>View course #<?php echo $model->id_course; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', 
        array('data'=>$model,
	'attributes'=>array(
                        'id_course',
                        'name',
                        'code',
                            ),
             ));
?>
