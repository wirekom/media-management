<?php
/* @var $this RegistrasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registrasis',
);

$this->menu=array(
	array('label'=>'Create Registrasi', 'url'=>array('create')),
	array('label'=>'Manage Registrasi', 'url'=>array('admin')),
);
?>

<h1>Registrasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
