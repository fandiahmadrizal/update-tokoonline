<?php
/* @var $this PelanggantblController */
/* @var $model Pelanggantbl */

$this->breadcrumbs=array(
	'Pelanggantbls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pelanggantbl', 'url'=>array('index')),
	array('label'=>'Create Pelanggantbl', 'url'=>array('create')),
	array('label'=>'Update Pelanggantbl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pelanggantbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggantbl', 'url'=>array('admin')),
);
?>

<h1>View Pelanggantbl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'alamat',
		'email',
		'telepon',
		'username',
		'password',
	),
)); ?>
