<?php
/* @var $this Ap1Ind4cController */
/* @var $model Ap1Ind4c */

$this->breadcrumbs=array(
	'Ap1 Ind4cs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind4c', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind4c', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind4c</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>