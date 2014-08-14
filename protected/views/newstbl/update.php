<?php
/* @var $this NewstblController */
/* @var $model Newstbl */

$this->breadcrumbs=array(
	'Newstbls'=>array('index'),
	$model->judul=>array('view','id'=>$model->judul),
	'Update',
);

$this->menu=array(
	array('label'=>'List Newstbl', 'url'=>array('index')),
	array('label'=>'Create Newstbl', 'url'=>array('create')),
	array('label'=>'View Newstbl', 'url'=>array('view', 'id'=>$model->judul)),
	array('label'=>'Manage Newstbl', 'url'=>array('admin')),
);
?>

<h1>Update Newstbl <?php echo $model->judul; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>