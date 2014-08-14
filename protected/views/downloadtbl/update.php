<?php
/* @var $this DownloadtblController */
/* @var $model Downloadtbl */

$this->breadcrumbs=array(
	'Downloadtbls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Downloadtbl', 'url'=>array('index')),
	array('label'=>'Create Downloadtbl', 'url'=>array('create')),
	array('label'=>'View Downloadtbl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Downloadtbl', 'url'=>array('admin')),
);
?>

<h1>Update Downloadtbl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>