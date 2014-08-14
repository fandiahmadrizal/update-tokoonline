<?php
/* @var $this DownloadtblController */
/* @var $model Downloadtbl */

$this->breadcrumbs=array(
	'Downloadtbls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Downloadtbl', 'url'=>array('index')),
	array('label'=>'Create Downloadtbl', 'url'=>array('create')),
	array('label'=>'Update Downloadtbl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Downloadtbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Downloadtbl', 'url'=>array('admin')),
);
?>

<h1>View Downloadtbl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'judul',
		'deskripsi',
		'url',
	),
)); ?>
