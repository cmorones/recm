<?php
/* @var $this Ap1Ind4cController */
/* @var $model Ap1Ind4c */

$this->breadcrumbs=array(
	'Ap1 Ind4cs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap1Ind4c', 'url'=>array('index')),
	array('label'=>'Create Ap1Ind4c', 'url'=>array('create')),
	array('label'=>'View Ap1Ind4c', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap1Ind4c', 'url'=>array('admin')),
);
?>

<h1>Update Ap1Ind4c <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>