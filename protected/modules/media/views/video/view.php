<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Video', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Update Video', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<h1>View Video #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'file',
		'document',
		'view_count',
		'like_count',
		'dislike_count',
		'created',
		'updated',
		'category_id',
		'author_id',
	),
)); ?>
