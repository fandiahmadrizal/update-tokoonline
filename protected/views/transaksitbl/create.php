<?php
/* @var $this TransaksitblController */
/* @var $model Transaksitbl */

$this->breadcrumbs=array(
	'Transaksitbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transaksitbl', 'url'=>array('index')),
	array('label'=>'Manage Transaksitbl', 'url'=>array('admin')),
);
?>

<h1>Create Transaksitbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>