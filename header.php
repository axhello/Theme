<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<nav id="nav" class="navbar navbar-default"><!-- #nav start -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php $this->options->themeUrl('img/hello.png'); ?>" border="0" align="default" alt="HELLO" width="94" height="30">
            </a>
        </div>
        <form class="navbar-form navbar-left" role="search"  method="post" action=""><!-- #Search start -->
            <div class="form-input">
                <input type="text" maxlength="40"  name="s" id="input" value="">
                <input type="submit" class="submit" value="Search" style="display:none;" />
            </div>
        </form><!-- #Search End -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                <?php $this->widget('Widget_Contents_Page_List')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
    </div>
</nav> <!-- #nav end -->

<div class="wrapper"><!-- #wrapper start -->
    <div class="container"><!-- #container start -->
        <div class="row"><!-- #row start -->
            <div class="col-md-8"><!-- #md-8 start -->
                <div class="main"><!-- #main start -->
                    <ol class="breadcrumb">
                        <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
                    </ol>