<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/screen.css"
              media="screen, projection" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
                <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ie.css" media="screen, projection" />
                <![endif]-->

        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/buttons.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/icons.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/tables.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/jquery.css" />

        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/mbmenu.css" />
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->baseUrl; ?>/css/mbmenu_iestyles.css" />


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div id="topnav">
                <div class="topnav_text">
                    <?php
                    echo CHtml::link('Home', array('/'));
                    echo ' | ';
                    echo CHtml::link('About', array('/site/page', 'view' => 'about'));
                    echo ' | ';
                    echo CHtml::link('Contact', array('/site/contact'));
                    echo ' | ';
                    if (Yii::app()->user->isGuest) {
                        echo CHtml::link(Yii::app()->getModule('user')->t("Login"), Yii::app()->getModule('user')->loginUrl);
                        echo ' | ';
                        echo CHtml::link(Yii::app()->getModule('user')->t("Register"), Yii::app()->getModule('user')->registrationUrl);
                    } else {
                        echo CHtml::link(Yii::app()->getModule('user')->t("Profile"), Yii::app()->getModule('user')->profileUrl);
                        echo ' | ';
                        echo CHtml::link(Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', Yii::app()->getModule('user')->logoutUrl);
                    }
                    ?>
                </div>
            </div>
            <div id="header">
                <div id="logo">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                </div>
            </div>
            <!-- header -->
            <div id="mainMbMenu">
                <?php
                $this->widget('ext.mbmenu.MbMenu', array(
                    'items' => array(
                        array(
                            'label' => 'Blog',
                            'url' => array('/blog/post'),
                            'visible' => !Yii::app()->user->isGuest,
                            'itemOptions' => array('class' => 'first'),
                        ),
                        array(
                            'label' => 'Admin',
                            'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName),
                            'items' => array(
                                array(
                                    'label' => 'User Management',
                                    'url' => array('/rights'),
                                    'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)
                                ),
                                array(
                                    'label' => 'User',
                                    'url' => array('/user/admin'),
                                    'visible' => Yii::app()->user->checkAccess(Rights::module()->superuserName)
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
            <!--mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?>
                <!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div id="footer">
                <?php echo Yii::app()->params['copyrightInfo']; ?>
                <br /> All Rights Reserved.<br />
                <?php echo Yii::powered(); ?>
            </div>
            <!-- footer -->

        </div>
        <!-- page -->

    </body>
</html>
