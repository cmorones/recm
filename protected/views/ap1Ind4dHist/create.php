<?php
/* @var $this Ap1Ind2aHistController */
/* @var $model Ap1Ind2aHist */

$this->breadcrumbs=array(
	'Ap1 Ind2a Hists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind2aHist', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind2aHist', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind2aHist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>