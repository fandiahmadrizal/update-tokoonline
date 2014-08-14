<?php
/* @var $this TransaksitblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksitbls',
);

$this->menu=array(
	array('label'=>'Create Transaksitbl', 'url'=>array('create')),
	array('label'=>'Manage Transaksitbl', 'url'=>array('admin')),
);
?>

<h1>Transaksitbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
