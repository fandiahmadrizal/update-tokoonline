<?php
/* @var $this NewstblController */
/* @var $model Newstbl */

$this->breadcrumbs=array(
	'Newstbls'=>array('index'),
	$model->judul,
);

$this->menu=array(
	array('label'=>'List Newstbl', 'url'=>array('index')),
	array('label'=>'Create Newstbl', 'url'=>array('create')),
	array('label'=>'Update Newstbl', 'url'=>array('update', 'id'=>$model->judul)),
	array('label'=>'Delete Newstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->judul),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Newstbl', 'url'=>array('admin')),
);
?>

<h1>View Newstbl #<?php echo $model->judul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tanggal',
		'judul',
		'news',
	),
)); ?>
