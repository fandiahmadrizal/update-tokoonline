<?php
/* @var $this TransaksitblController */
/* @var $model Transaksitbl */

$this->breadcrumbs=array(
	'Transaksitbls'=>array('index'),
	$model->notransaksi,
);

$this->menu=array(
	array('label'=>'List Transaksitbl', 'url'=>array('index')),
	array('label'=>'Create Transaksitbl', 'url'=>array('create')),
	array('label'=>'Update Transaksitbl', 'url'=>array('update', 'id'=>$model->notransaksi)),
	array('label'=>'Delete Transaksitbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->notransaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksitbl', 'url'=>array('admin')),
);
?>

<h1>View Transaksitbl #<?php echo $model->notransaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'notransaksi',
		'username',
		'status',
	),
)); ?>
