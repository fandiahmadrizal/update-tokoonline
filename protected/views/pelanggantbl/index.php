<?php
/* @var $this PelanggantblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggantbls',
);

$this->menu=array(
	array('label'=>'Create Pelanggantbl', 'url'=>array('create')),
	array('label'=>'Manage Pelanggantbl', 'url'=>array('admin')),
);
?>

<h1>Pelanggantbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
