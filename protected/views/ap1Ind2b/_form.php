<?php
/* @var $this Ap1Ind2bController */
/* @var $model Ap1Ind2b */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap1-ind2b-form',
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
		<?php echo $form->labelEx($model,'id_entidad'); ?>
		<?php echo $form->textField($model,'id_entidad'); ?>
		<?php echo $form->error($model,'id_entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sector'); ?>
		<?php echo $form->textField($model,'id_sector'); ?>
		<?php echo $form->error($model,'id_sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
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