<?php
/* @var $this TestimonialtblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testimonialtbls',
);

$this->menu=array(
	array('label'=>'Create Testimonialtbl', 'url'=>array('create')),
	array('label'=>'Manage Testimonialtbl', 'url'=>array('admin')),
);
?>

<h1>Testimonialtbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
