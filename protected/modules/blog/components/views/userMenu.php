<?php

$this->widget('zii.widgets.CMenu', array(
    'items' => array(
        array(
            'label' => 'Create New Post',
            'url' => array('/blog/post/create'),
            'visible' => Yii::app()->user->checkAccess('Blog.Post.Create')
        ),
        array(
            'label' => 'Manage Posts',
            'url' => array('/blog/post/admin'),
            'visible' => Yii::app()->user->checkAccess('Blog.Post.Admin')
        ),
        array(
            'label' => Yii::t('blog', 'Approve Comments (:commentCount)', array(':commentCount' => Comment::model()->pendingCommentCount)),
            'url' => array('/blog/comment/index'), 'visible' => Yii::app()->user->checkAccess('Blog.Comment.Approve')
        ),
        array(
            'label' => 'Logout',
            'url' => array('/user/logout'),
            'visible' => !Yii::app()->user->isGuest
        ),
    ),
));