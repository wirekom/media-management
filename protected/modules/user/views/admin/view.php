<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('admin'),
    $model->username,
);


$this->menu = array(
    array('label' => UserModule::t('Create User'), 'url' => array('create')),
    array('label' => UserModule::t('Update User'), 'url' => array('update', 'id' => $model->id)),
    array('label' => UserModule::t('Delete User'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => UserModule::t('Are you sure to delete this item?'))),
    array('label' => UserModule::t('Manage Users'), 'url' => array('admin')),
    array('label' => UserModule::t('List User'), 'url' => array('/user')),
);
?>
<h1><?php echo UserModule::t('View User') . ' "' . $model->username . '"'; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'username',
        'email',
        'lastvisit',
        array(
            'name' => 'superuser',
            'value' => User::itemAlias("AdminStatus", $model->superuser),
        ),
        array(
            'name' => 'status',
            'value' => User::itemAlias("UserStatus", $model->status),
        )
    ),
));
?>