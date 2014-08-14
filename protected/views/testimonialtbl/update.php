<?php
/* @var $this TestimonialtblController */
/* @var $model Testimonialtbl */

$this->breadcrumbs=array(
	'Testimonialtbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testimonialtbl', 'url'=>array('index')),
	array('label'=>'Create Testimonialtbl', 'url'=>array('create')),
	array('label'=>'View Testimonialtbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Testimonialtbl', 'url'=>array('admin')),
);
?>

<h1>Update Testimonialtbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>