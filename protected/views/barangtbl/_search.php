<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */
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
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warna'); ?>
		<?php echo $form->textField($model,'warna',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ukuran'); ?>
		<?php echo $form->textField($model,'ukuran',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->