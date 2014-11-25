<?php
/* @var $this Ap1Ind2aController */
/* @var $model Ap1Ind2a */

$this->breadcrumbs=array(
	'Ap1 Ind2as'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind2a', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind2a', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind2a</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>