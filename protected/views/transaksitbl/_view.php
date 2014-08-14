<?php
/* @var $this TransaksitblController */
/* @var $data Transaksitbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('notransaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->notransaksi), array('view', 'id'=>$data->notransaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>