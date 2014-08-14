<?php
/* @var $this KategoritblController */
/* @var $model Kategoritbl */

$this->breadcrumbs=array(
	'Kategoritbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kategoritbl', 'url'=>array('index')),
	array('label'=>'Manage Kategoritbl', 'url'=>array('admin')),
);
?>

<h1>Create Kategoritbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>