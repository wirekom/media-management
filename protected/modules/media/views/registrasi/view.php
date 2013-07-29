<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */

$this->breadcrumbs=array(
	'Registrasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Registrasi', 'url'=>array('index')),
	array('label'=>'Create Registrasi', 'url'=>array('create')),
	array('label'=>'Update Registrasi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Registrasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registrasi', 'url'=>array('admin')),
);
?>

<h1>View Registrasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'passport_num',
		'job_title',
		'media_name',
		'company_address',
		'company_desc',
		'email_address',
		'mobile_num',
		'photo_graph',
		'letter_of_assignment',
	),
)); ?>
