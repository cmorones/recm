<?php
/* @var $this Ap1Ind4cController */
/* @var $model Ap1Ind4c */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap1-ind4c-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_periodo'); ?>
		<?php echo $form->textField($model,'id_periodo'); ?>
		<?php echo $form->error($model,'id_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_trimestre'); ?>
		<?php echo $form->textField($model,'id_trimestre'); ?>
		<?php echo $form->error($model,'id_trimestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pib'); ?>
		<?php echo $form->textField($model,'pib'); ?>
		<?php echo $form->error($model,'pib'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'igae'); ?>
		<?php echo $form->textField($model,'igae'); ?>
		<?php echo $form->error($model,'igae'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itaee'); ?>
		<?php echo $form->textField($model,'itaee'); ?>
		<?php echo $form->error($model,'itaee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
		<?php echo $form->error($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
		<?php echo $form->error($model,'fecha_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_reg'); ?>
		<?php echo $form->textField($model,'user_reg'); ?>
		<?php echo $form->error($model,'user_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_mod'); ?>
		<?php echo $form->textField($model,'user_mod'); ?>
		<?php echo $form->error($model,'user_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->