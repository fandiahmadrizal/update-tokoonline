<?php
/* @var $this AdmintblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admintbls',
);

$this->menu=array(
	array('label'=>'Create Admintbl', 'url'=>array('create')),
	array('label'=>'Manage Admintbl', 'url'=>array('admin')),
);
?>

<h1>Admintbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
