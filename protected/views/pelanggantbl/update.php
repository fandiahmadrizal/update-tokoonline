<?php
/* @var $this PelanggantblController */
/* @var $model Pelanggantbl */

$this->breadcrumbs=array(
	'Pelanggantbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelanggantbl', 'url'=>array('index')),
	array('label'=>'Create Pelanggantbl', 'url'=>array('create')),
	array('label'=>'View Pelanggantbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pelanggantbl', 'url'=>array('admin')),
);
?>

<h1>Update Pelanggantbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>