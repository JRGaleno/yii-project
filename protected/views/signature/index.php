<?php
$record=person::model()->findByPk(Yii::app()->user->getId());
$this->breadcrumbs=array(
	'Signatures',
);

$this->menu=  [array('label'=>'Manage signature', 'url'=>array('admin'), 'visible'=>strtoupper($record['role'])=='ADMIN'),
        ];

?>

<h1>Available Signatures</h1>

<?php
$record=person::model()->findByPk(Yii::app()->user->getId());
echo $record['role']; 
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
