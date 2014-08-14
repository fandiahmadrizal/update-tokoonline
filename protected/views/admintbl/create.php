<?php
/* @var $this AdmintblController */
/* @var $model Admintbl */

$this->breadcrumbs=array(
	'Admintbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Admintbl', 'url'=>array('index')),
	array('label'=>'Manage Admintbl', 'url'=>array('admin')),
);
?>

<h1>Create Admintbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>