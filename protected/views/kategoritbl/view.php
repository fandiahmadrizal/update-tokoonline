<?php
/* @var $this KategoritblController */
/* @var $model Kategoritbl */

$this->breadcrumbs=array(
	'Kategoritbls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kategoritbl', 'url'=>array('index')),
	array('label'=>'Create Kategoritbl', 'url'=>array('create')),
	array('label'=>'Update Kategoritbl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kategoritbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kategoritbl', 'url'=>array('admin')),
);
?>

<h1>View Kategoritbl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kategori',
	),
)); ?>
