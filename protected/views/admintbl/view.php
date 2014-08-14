<?php
/* @var $this AdmintblController */
/* @var $model Admintbl */

$this->breadcrumbs=array(
	'Admintbls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Admintbl', 'url'=>array('index')),
	array('label'=>'Create Admintbl', 'url'=>array('create')),
	array('label'=>'Update Admintbl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Admintbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Admintbl', 'url'=>array('admin')),
);
?>

<h1>View Admintbl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
