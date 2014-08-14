<?php
/* @var $this KategoritblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoritbls',
);

$this->menu=array(
	array('label'=>'Create Kategoritbl', 'url'=>array('create')),
	array('label'=>'Manage Kategoritbl', 'url'=>array('admin')),
);
?>

<h1>Kategoritbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
