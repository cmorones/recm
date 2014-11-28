<?php
/* @var $this Ap1Ind4bController */
/* @var $model Ap1Ind4b */

$this->breadcrumbs=array(
	'Ap1 Ind4bs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind4b', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind4b', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind4b</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>