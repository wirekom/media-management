<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'passport_num'); ?>
        <?php echo $form->textField($model, 'passport_num', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'job_title'); ?>
        <?php echo $form->textField($model, 'job_title', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'media_name'); ?>
        <?php echo $form->textField($model, 'media_name', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'company_address'); ?>
        <?php echo $form->textArea($model, 'company_address', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'company_desc'); ?>
        <?php echo $form->textArea($model, 'company_desc', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email_address'); ?>
        <?php echo $form->textField($model, 'email_address', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'mobile_num'); ?>
        <?php echo $form->textField($model, 'mobile_num', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'photo_graph'); ?>
        <?php echo $form->textField($model, 'photo_graph', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'letter_of_assignment'); ?>
        <?php echo $form->textField($model, 'letter_of_assignment', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->