<?php
/* @var $this Ap1Ind4cController */
/* @var $model Ap1Ind4c */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_periodo'); ?>
		<?php echo $form->textField($model,'id_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_trimestre'); ?>
		<?php echo $form->textField($model,'id_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pib'); ?>
		<?php echo $form->textField($model,'pib'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'igae'); ?>
		<?php echo $form->textField($model,'igae'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itaee'); ?>
		<?php echo $form->textField($model,'itaee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_reg'); ?>
		<?php echo $form->textField($model,'user_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_mod'); ?>
		<?php echo $form->textField($model,'user_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->