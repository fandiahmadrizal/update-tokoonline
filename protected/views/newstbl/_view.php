<?php
/* @var $this NewstblController */
/* @var $data Newstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->judul), array('view', 'id'=>$data->judul)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news')); ?>:</b>
	<?php echo CHtml::encode($data->news); ?>
	<br />


</div>