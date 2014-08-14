<?php
/* @var $this NewstblController */
/* @var $model Newstbl */

$this->breadcrumbs=array(
	'Newstbls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Newstbl', 'url'=>array('index')),
	array('label'=>'Manage Newstbl', 'url'=>array('admin')),
);
?>

<h1>Create Newstbl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>