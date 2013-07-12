<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/myStyle.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/diapo.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/flexslider.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/menu.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/docs.css" />
        <link rel="stylesheet" type="text/css"href="<?php echo Yii::app()->baseUrl; ?>/css/jquery.lightbox-0.5.css" />
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />-->
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.easing-1.3.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/diapo.min.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/menu.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.lightbox-0.5.min.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.hoverIntent.minified.js"></script>
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="navbar navi navbar-fixed-top">
            <div class="container">
                <a class="logo" href="index.php"><div class="logoinner"><img src="../images/logo.png" /></div></a>
                <div class="datetime offset2">8-Juli-2013, 11:30</div>
                <form class="form-search pull-right">
                    <input type="text" class="" placeholder="search">
                        <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
        <div class="barbar navbar-fixed-top">
            <div class="container">
                <div id="menu">
                    <ul class="menu">
                        <li><?php echo CHtml::link('<span>Home</span>', array('/site/page', 'view' => 'home')); ?></li>
                        <li><a href="#" class="parent"><span>ABAC Meeting</span></a>
                            <div><ul>
                                    <li><a href="#" class="parent"><span>Photo</span></a>
                                        <div><ul>
                                                <li><a href="#"><span>Day 1</span></a></li>
                                                <li><a href="#"><span>Day 2</span></a></li>
                                                <li><a href="#"><span>Day 3</span></a></li>
                                            </ul></div>
                                    </li>
                                    <li><a href="#" class="parent"><span>News Release</span></a>
                                        <div><ul>
                                                <li><a href="#"><span>Day 1</span></a></li>
                                                <li><a href="#"><span>Day 2</span></a></li>
                                                <li><a href="#"><span>Day 3</span></a></li>
                                            </ul></div>
                                    </li>
                                </ul></div>
                        </li>
                        <li><a href="#" class="parent"><span>APEC SEO</span></a>
                            <div><ul>
                                    <li><a href="#"><span>Agenda</span></a></li>
                                    <li><a href="#" class="parent"><span>Photo</span></a>
                                        <div><ul>
                                                <li><a href="#"><span>Day 1</span></a></li>
                                                <li><a href="#"><span>Day 2</span></a></li>
                                                <li><a href="#"><span>Day 3</span></a></li>
                                            </ul></div>
                                    </li>
                                    <li><a href="#" class="parent"><span>News Release</span></a>
                                        <div><ul>
                                                <li><a href="#"><span>Day 1</span></a></li>
                                                <li><a href="#"><span>Day 2</span></a></li>
                                                <li><a href="#"><span>Day 3</span></a></li>
                                            </ul></div>
                                    </li>
                                    <li><a href="#" class="parent"><span>Video</span></a>
                                        <div><ul>
                                                <li><a href="#"><span>Day 1</span></a></li>
                                                <li><a href="#"><span>Day 2</span></a></li>
                                                <li><a href="#"><span>Day 3</span></a></li>
                                            </ul></div>
                                    </li>
                                </ul></div>
                        </li>
                        <li><a href="#" class="parent"><span>Who's Who</span></a>
                            <div>
                                <ul>
                                    <li><a href="#"><span>ABAC Leaders</span></a></li>
                                    <li><a href="#"><span>Speakers</span></a></li>
                                    <li><a href="#"><span>Moderators</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" class="parent"><span>About Indonesia Charmanship</span></a>
                            <div>
                                <ul>
                                    <li><a href="#"><span>About Indonesia</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="last"><a href="#"><span>Media Inquiry</span></a>
                            <div>
                                <ul>
                                    <li><a href="#"><span>Media Guide</span></a></li>
                                    <li><a href="#"><span>Intervie Inquiry</span></a></li>
                                    <li><a href="#"><span>Broadcast Equipment Inquiry</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
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

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icon-home icon-white"></i></a><span class="divider">&nbsp;</span></li>
                <li><a>Home</a><span class="divider">&nbsp;</span></li>
                <li><a>Video List</a><span class="divider-last">&nbsp;</span></li>
            </ul>
        </div>

        <?php echo $content; ?>

        <div class="Menufoot inner2">
            <div class="container">
                <div class="innerLR">
                    <div class="row-fluid">
                        <div class="wid">
                            <div class="span12">
                                <ul class="sitemap">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">ABAC Meeting</a>
                                        <ul>
                                            <li class="colapse"><a href="#">Photo</a>
                                                <ul>
                                                    <li><a href="#">Day 1</a></li>
                                                    <li><a href="#">Day 2</a></li>
                                                    <li><a href="#">Day 3</a></li>
                                                </ul></li>
                                            <li class="colapse"><a href="#">News Release</a>      	
                                                <ul>
                                                    <li><a href="#">Day 1</a></li>
                                                    <li><a href="#">Day 2</a></li>
                                                    <li><a href="#">Day 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">APEC SEO</a>
                                        <ul>
                                            <li><a href="#">Agenda</a></li>
                                            <li class="colapse"><a href="#">Photo</a>
                                                <ul>
                                                    <li><a href="#">Day 1</a></li>
                                                    <li><a href="#">Day 2</a></li>
                                                    <li><a href="#">Day 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="colapse"><a href="#">News Release</a>      	
                                                <ul>
                                                    <li><a href="#">Day 1</a></li>
                                                    <li><a href="#">Day 2</a></li>
                                                    <li><a href="#">Day 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="colapse"><a href="#">Video</a>
                                                <ul>
                                                    <li><a href="#">Day 1</a></li>
                                                    <li><a href="#">Day 2</a></li>
                                                    <li><a href="#">Day 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Who's Who</a>
                                        <ul>
                                            <li><a href="#">ABAC Leaders</a></li>
                                            <li><a href="#">Speakers</a></li>
                                            <li><a href="#">Moderators</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About Indonesia Charmanship</a>
                                        <ul>
                                            <li><a href="#">About Indonesia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Media Inquiry</a>
                                        <ul>
                                            <li><a href="#">Media Guide</a></li>
                                            <li><a href="#">Intervie Inquiry</a></li>
                                            <li><a href="#">Broadcast Equipment Inquiry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>
                    &copy; 2013 Your Company.<br>
                        Design by Syukri
                </p>
            </div>
        </footer>
        <script type="text/javascript">


            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: false,
                });
                $('.fet-pic li a').lightBox({
                    containerResizeSpeed: 250,
                    fixedNavigation: true
                });
            });
            jQuery(document).ready(function() {
                jQuery(".sitemap li ul li ul").hide();
                $('.sitemap li ul .colapse').hover(function() {
                    $('.sitemap li ul li ul').toggle(400);
                });

                //toggle the componenet with class msg_body
                /* jQuery(".sitemap li ul .colapse").hover(function()
                 {
                 jQuery(this).next(".sitemap li ul li ul").slideToggle(500);
                 }); */
            });
        </script>

    </body>
</html>
