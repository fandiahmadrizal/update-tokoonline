<?php
/* @var $this KategoritblController */
/* @var $model Kategoritbl */

$this->breadcrumbs=array(
	'Kategoritbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kategoritbl', 'url'=>array('index')),
	array('label'=>'Create Kategoritbl', 'url'=>array('create')),
	array('label'=>'View Kategoritbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kategoritbl', 'url'=>array('admin')),
);
?>

<h1>Update Kategoritbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>