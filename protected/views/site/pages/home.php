
<div class="container">
    <!--Start Carousel-->
    <script>
        $(function() {
            $('.pix_diapo').diapo();
        });
    </script>
    <div class="pix_diapo">
        <div data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/thumbs/1-thumb.jpg">
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/1.jpg">
            <div class="caption elemHover fromLeft">
                This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
            </div>
        </div>	

        <div data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/thumbs/2-thumb.jpg">
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/2.jpg"> 
            <div class="caption elemHover fromRight" style="bottom:65px; padding-bottom:5px; color:#ff0; text-transform:uppercase">
                Here you can see two captions.
            </div>
            <div class="caption elemHover fromLeft" style="padding-top:5px;">
                The first are loaded immediately before than the second one
            </div>
        </div>
        <div data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/thumbs/3-thumb.png">
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/3.png">
            <div class="caption elemHover fromLeft">
                This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
            </div>
        </div>
        <div data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/thumbs/4-thumb.png">
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/4.png">
            <div class="caption elemHover fromLeft">
                This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
            </div>
        </div>
        <div data-thumb="<?php echo Yii::app()->baseUrl; ?>/images/thumbs/5-thumb.png">
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/5.png">
            <div class="caption elemHover fromLeft">
                This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
            </div>
        </div>
    </div><!-- #pix_diapo -->
    <!--End Carousel-->
</div>
<div class="container inner">
    <div class="innerLR">
        <div class="row-fluid">
            <div class="wid">
                <div class="span12 thumb-list">
                    <a rel="lightbox" class="lightbox" href=""><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" alt="Thumbnail"></a>
                    <h3><a href="#">This Should Be Your Title.</a></h3>
                    <div class="media-body">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                Donec vitae nibh felis, facilisis bibendum sapien. 
                                Duis a odio id erat scelerisque fermentum in ut leo. 
                                Suspendisse potenti. Nunc semper cursus dui luctus porttitor. 
                                Donec facilisis semper magna sit amet ullamcorper. 
                                Cras rutrum magna eget risus vulputate congue. 
                                Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. 
                                Integer tincidunt risus in metus rhoncus molestie. 
                                Nam semper, augue suscipit elementum vehicula, nisl justo fermentum mi, at ultrices quam enim eu nulla. 
                                Sed et neque a metus ultrices condimentum non nec purus.</p>
                        </blockquote>
                        <a title="" href="#" class="btn">Show/Hide Complete Message</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Start second row of columns-->
        <hr>
        <div class="row-fluid"><!--========== Content ===========-->
            <div class="span4"><!-- Latest Video -->
                <div class="alat">
                    <div class="wid-head">
                        <h4 class="heading"><i class="icon-film icon-white"></i> Latest Video</h4>
                    </div>
                    <div class="wid-body">
                        <ul class="list">
                            <li>
                                <span class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/video.png" /></span>
                                <span class="title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur</a><br>
                                    <small>02 Juli 2013</small>
                                </span>
                                <span class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris.</span>
                            </li>
                            <li>
                                <span class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/video.png" /></span>
                                <span class="title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur</a><br>
                                    <small>02 Juli 2013</small>
                                </span>
                                <span class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris.</span>
                            </li>
                            <li>
                                <span class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/video.png" /></span>
                                <span class="title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur</a><br>
                                    <small>02 Juli 2013</small>
                                </span>
                                <span class="descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Latest Video End -->
            <div class="span4"><!-- Topic Terbaru -->
                <div class="alat">
                    <div class="wid-head">
                        <h4 class="heading"><i class="icon-tag icon-white"></i> Topic</h4>
                    </div>
                    <div class="wid-body">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/topic1.jpg" />
                                    <h3 class="title">Lorem ipsum dolor sit amet</h3>
                                    <div class="isi">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis, facilisis bibendum sapien. 
                                        Duis a odio id erat scelerisque fermentum in ut leo. 
                                        Suspendisse potenti<?php echo Yii::app()->baseUrl; ?>.
                                    </div>
                                    <div class="learn">
                                        <a href="" class="btn">Read More</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/topic2.jpg" />
                                    <h3 class="title">Lorem ipsum dolor sit amet</h3>
                                    <div class="isi">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis, facilisis bibendum sapien. 
                                        Duis a odio id erat scelerisque fermentum in ut leo. 
                                        Suspendisse potenti<?php echo Yii::app()->baseUrl; ?>.
                                    </div>
                                    <div class="learn">
                                        <a href="" class="btn">Read More</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/featured/topic3.jpg" />
                                    <h3 class="title">Lorem ipsum dolor sit amet</h3>
                                    <div class="isi">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis, facilisis bibendum sapien. 
                                        Duis a odio id erat scelerisque fermentum in ut leo. 
                                        Suspendisse potenti<?php echo Yii::app()->baseUrl; ?>.
                                    </div>
                                    <div class="learn">
                                        <a href="" class="btn">Read More</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Topic Terbaru -->
            <div class="span4"><!-- Topic Terbaru -->
                <div class="alat">
                    <div class="wid-head">
                        <h4 class="heading"><i class="icon-th-list icon-white"></i> Latest News</h4>
                    </div>
                    <div class="wid-body">
                        <ul class="news">
                            <li>
                                <span class="time span4">1 Juli 2013</span>
                                <div class="span8">
                                    <div class="news-title"><a href="#">Title of News</a></div>
                                    <div class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis<?php echo Yii::app()->baseUrl; ?>.</div>
                                </div>
                            </li>
                            <li>
                                <span class="time span4">1 Juli 2013</span>
                                <div class="span8">
                                    <div class="news-title"><a href="#">Title of News</a></div>
                                    <div class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis<?php echo Yii::app()->baseUrl; ?>.</div>
                                </div>
                            </li>
                            <li>
                                <span class="time span4">1 Juli 2013</span>
                                <div class="span8">
                                    <div class="news-title"><a href="#">Title of News</a></div>
                                    <div class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis<?php echo Yii::app()->baseUrl; ?>.</div>
                                </div>
                            </li>
                            <li>
                                <span class="time span4">1 Juli 2013</span>
                                <div class="span8">
                                    <div class="news-title"><a href="#">Title of News</a></div>
                                    <div class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. 
                                        Donec vitae nibh felis<?php echo Yii::app()->baseUrl; ?>.</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- Topic Terbaru -->
        </div>
    </div><!-- /innerLR -->
</div><!-- /container -->
<!-- Gallery-->
<div class="container inner">
    <div class="innerLR">
        <div class="row-fluid">
            <div class="wid">
                <div class="span12">
                    <div class="alat">
                        <div class="wid-head">
                            <h4 class="heading"><i class="icon-picture icon-white"></i> Gallery</h4>
                            <a href="#" class="btn pull-right" style="margin-top:5px;">View All Gallery</a>
                        </div>
                        <div class="wid-body fet">
                            <div class="row-fluid">
                                <ul class="fet-pic">
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb1.jpg" class="img-polaroid" /></a></li>
                                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" title="Description Here"><img src="<?php echo Yii::app()->baseUrl; ?>/images/thumb2.jpg" class="img-polaroid" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>