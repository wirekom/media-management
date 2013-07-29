<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */

$this->breadcrumbs=array(
	'Registrasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registrasi', 'url'=>array('index')),
	array('label'=>'Create Registrasi', 'url'=>array('create')),
	array('label'=>'View Registrasi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Registrasi', 'url'=>array('admin')),
);
?>

<h1>Update Registrasi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>