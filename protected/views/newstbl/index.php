<?php
/* @var $this NewstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Newstbls',
);

$this->menu=array(
	array('label'=>'Create Newstbl', 'url'=>array('create')),
	array('label'=>'Manage Newstbl', 'url'=>array('admin')),
);
?>

<h1>Newstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
