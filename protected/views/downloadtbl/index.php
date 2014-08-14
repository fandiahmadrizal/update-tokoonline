<?php
/* @var $this DownloadtblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Downloadtbls',
);

$this->menu=array(
	array('label'=>'Create Downloadtbl', 'url'=>array('create')),
	array('label'=>'Manage Downloadtbl', 'url'=>array('admin')),
);
?>

<h1>Downloadtbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
