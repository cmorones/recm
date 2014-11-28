<?php
/* @var $this Ap1Ind2bController */
/* @var $model Ap1Ind2b */

$this->breadcrumbs=array(
	'Ap1 Ind2bs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind2b', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind2b', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind2b</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>