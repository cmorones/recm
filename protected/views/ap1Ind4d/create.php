<?php
/* @var $this Ap1Ind4dController */
/* @var $model Ap1Ind4d */

$this->breadcrumbs=array(
	'Ap1 Ind4ds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind4d', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind4d', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind4d</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>