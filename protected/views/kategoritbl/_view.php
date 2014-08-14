<?php
/* @var $this KategoritblController */
/* @var $data Kategoritbl */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />


</div>