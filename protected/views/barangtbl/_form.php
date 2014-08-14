<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barangtbl-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warna'); ?>
		<?php echo $form->textField($model,'warna',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'warna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ukuran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>25,'maxlength'=>25)); ?>
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
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->