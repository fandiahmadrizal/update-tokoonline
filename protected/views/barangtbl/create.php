<?php
/* @var $this BarangtblController */
/* @var $model Barangtbl */

$this->breadcrumbs=array(
	'Barangtbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barangtbl', 'url'=>array('index')),
	array('label'=>'Manage Barangtbl', 'url'=>array('admin')),
);
?>

<h1>Create Barangtbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>