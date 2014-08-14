<?php
/* @var $this DownloadtblController */
/* @var $model Downloadtbl */

$this->breadcrumbs=array(
	'Downloadtbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Downloadtbl', 'url'=>array('index')),
	array('label'=>'Create Downloadtbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#downloadtbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Downloadtbls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'downloadtbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'judul',
		'deskripsi',
		'url',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
