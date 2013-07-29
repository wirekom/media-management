<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */

$this->breadcrumbs=array(
	'Registrasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Registrasi', 'url'=>array('index')),
	array('label'=>'Manage Registrasi', 'url'=>array('admin')),
);
?>

<h1>Create Registrasi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>