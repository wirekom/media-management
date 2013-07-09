<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('index'),
    $model->username,
);
$this->layout = '//layouts/column2';
$this->menu = array(
    array('label' => UserModule::t('List User'), 'url' => array('index')),
);
?>
<h1><?php echo UserModule::t('View User') . ' "' . $model->username . '"'; ?></h1>
<?php
// For all users
$attributes = array(
    'username',
);

array_push($attributes, array(
    'name' => 'lastvisit',
    'value' => (($model->lastvisit != '0000-00-00 00:00:00') ? $model->lastvisit : UserModule::t('Not visited')),
        )
);

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => $attributes,
));
?>
