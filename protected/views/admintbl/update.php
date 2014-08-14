<?php
/* @var $this AdmintblController */
/* @var $model Admintbl */

$this->breadcrumbs=array(
	'Admintbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Admintbl', 'url'=>array('index')),
	array('label'=>'Create Admintbl', 'url'=>array('create')),
	array('label'=>'View Admintbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Admintbl', 'url'=>array('admin')),
);
?>

<h1>Update Admintbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>