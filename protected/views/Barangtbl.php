<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barangtbl-Barangtbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama'); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi'); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warna'); ?>
		<?php echo $form->textField($model,'warna'); ?>
		<?php echo $form->error($model,'warna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran'); ?>
		<?php echo $form->error($model,'ukuran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori'); ?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar'); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->