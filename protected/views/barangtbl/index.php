<?php
/* @var $this BarangtblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barangtbls',
);

$this->menu=array(
	array('label'=>'Create Barangtbl', 'url'=>array('create')),
	array('label'=>'Manage Barangtbl', 'url'=>array('admin')),
);
?>

<h1>Barangtbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
