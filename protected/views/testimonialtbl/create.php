<?php
/* @var $this TestimonialtblController */
/* @var $model Testimonialtbl */

$this->breadcrumbs=array(
	'Testimonialtbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Testimonialtbl', 'url'=>array('index')),
	array('label'=>'Manage Testimonialtbl', 'url'=>array('admin')),
);
?>

<h1>Create Testimonialtbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>