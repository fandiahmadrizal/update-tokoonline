<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */

$this->breadcrumbs=array(
	'Barangtbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barangtbl', 'url'=>array('index')),
	array('label'=>'Create Barangtbl', 'url'=>array('create')),
	array('label'=>'View Barangtbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Barangtbl', 'url'=>array('admin')),
);
?>

<h1>Update Barangtbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>