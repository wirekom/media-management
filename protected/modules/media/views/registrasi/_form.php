<?php
/* @var $this RegistrasiController */
/* @var $model Registrasi */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'registrasi-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'first_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'last_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'passport_num'); ?>
        <?php echo $form->textField($model, 'passport_num', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'passport_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'job_title'); ?>
        <?php echo $form->textField($model, 'job_title', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'job_title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'media_name'); ?>
        <?php echo $form->textField($model, 'media_name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'media_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'company_address'); ?>
        <?php echo $form->textArea($model, 'company_address', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'company_address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'company_desc'); ?>
        <?php echo $form->textArea($model, 'company_desc', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'company_desc'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email_address'); ?>
        <?php echo $form->textField($model, 'email_address', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'email_address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'mobile_num'); ?>
        <?php echo $form->textField($model, 'mobile_num', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'mobile_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'photo_graph'); ?>
        <?php echo $form->textField($model, 'photo_graph', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'photo_graph'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'letter_of_assignment'); ?>
        <?php echo $form->textField($model, 'letter_of_assignment', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'letter_of_assignment'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'verifyCode'); ?>

        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->textField($model, 'verifyCode'); ?>
        <?php echo $form->error($model, 'verifyCode'); ?>

        <p class="hint"><?php echo "Please enter the letters as they are shown in the image above."; ?>
            <br/><?php echo "Letters are not case-sensitive."; ?></p>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->