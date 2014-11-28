<?php
/* @var $this Ap1Ind4dController */
/* @var $model Ap1Ind4d */

$this->breadcrumbs=array(
	'Ap1 Ind4ds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap1Ind4d', 'url'=>array('index')),
	array('label'=>'Create Ap1Ind4d', 'url'=>array('create')),
	array('label'=>'View Ap1Ind4d', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap1Ind4d', 'url'=>array('admin')),
);
?>

<h1>Update Ap1Ind4d <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>