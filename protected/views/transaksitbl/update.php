<?php
/* @var $this TransaksitblController */
/* @var $model Transaksitbl */

$this->breadcrumbs=array(
	'Transaksitbls'=>array('index'),
	$model->notransaksi=>array('view','id'=>$model->notransaksi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaksitbl', 'url'=>array('index')),
	array('label'=>'Create Transaksitbl', 'url'=>array('create')),
	array('label'=>'View Transaksitbl', 'url'=>array('view', 'id'=>$model->notransaksi)),
	array('label'=>'Manage Transaksitbl', 'url'=>array('admin')),
);
?>

<h1>Update Transaksitbl <?php echo $model->notransaksi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>