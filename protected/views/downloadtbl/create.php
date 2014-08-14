<?php
/* @var $this DownloadtblController */
/* @var $model Downloadtbl */

$this->breadcrumbs=array(
	'Downloadtbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Downloadtbl', 'url'=>array('index')),
	array('label'=>'Manage Downloadtbl', 'url'=>array('admin')),
);
?>

<h1>Create Downloadtbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>