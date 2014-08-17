<?php
/* @var $this SeatController */
/* @var $model Seat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'row'); ?>
		<?php echo $form->textField($model,'row',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'row'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'floor'); ?>
		<?php echo $form->textField($model,'floor'); ?>
		<?php echo $form->error($model,'floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer'); ?>
		<?php echo $form->textField($model,'customer'); ?>
		<?php echo $form->error($model,'customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_id'); ?>
		<?php echo $form->textField($model,'price_id'); ?>
		<?php echo $form->error($model,'price_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->