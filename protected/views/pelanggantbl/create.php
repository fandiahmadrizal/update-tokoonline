<?php
/* @var $this PelanggantblController */
/* @var $model Pelanggantbl */

$this->breadcrumbs=array(
	'Pelanggantbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelanggantbl', 'url'=>array('index')),
	array('label'=>'Manage Pelanggantbl', 'url'=>array('admin')),
);
?>

<h1>Create Pelanggantbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>