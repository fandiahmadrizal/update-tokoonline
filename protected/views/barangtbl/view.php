<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */

$this->breadcrumbs=array(
	'Barangtbls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Barangtbl', 'url'=>array('index')),
	array('label'=>'Create Barangtbl', 'url'=>array('create')),
	array('label'=>'Update Barangtbl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Barangtbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barangtbl', 'url'=>array('admin')),
);
?>

<h1>View Barangtbl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'deskripsi',
		'warna',
		'ukuran',
		'kategori',
		'harga',
		'stock',
		'gambar',
	),
)); ?>
