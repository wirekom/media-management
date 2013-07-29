<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */

$this->breadcrumbs=array(
	'Registrasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registrasi', 'url'=>array('index')),
	array('label'=>'Create Registrasi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registrasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registrasis</h1>

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
	'id'=>'registrasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'passport_num',
		'job_title',
		'media_name',
		/*
		'company_address',
		'company_desc',
		'email_address',
		'mobile_num',
		'photo_graph',
		'letter_of_assignment',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
