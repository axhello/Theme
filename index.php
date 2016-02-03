<?php
/**
 * 这是一款仿V2EX的Typecho主题
 * 
 * @package For V2EX Theme 
 * @author Axhello
 * @version 1.0.4
 * @link http://ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php'); ?>

<div class="wrapper"><!-- #wrapper start -->
    <div class="container">
    <div class="row"><!-- #row start -->
        <div class="col-md-8"><!-- #md-8 start -->
            <div class="main"><!-- #main start -->
                <div class="bread">
                       <div class="crumbs_patch">
                            <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;
                            <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
                                Index
                            <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
                                <?php $this->category(); ?> &raquo; <?php $this->title() ?>
                            <?php else: ?><!-- 页面为其他页时 -->
                                <?php $this->archiveTitle(' &raquo; ','',''); ?>
                            <?php endif; ?>
                        </div>
                </div>
    <div class="boxcont">
        <?php while($this->next()): ?>
        <article class="post">
            <header class="post-head">
                <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                <span style="color: #aaa">发布于</span> <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
            </header>
            <section class="post-content">
                <?php $this->excerpt('200', '...') ?>
            </section>
            <footer class="post-foot-warp">
                    <ul class="post-tag fl">
                         <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
                    </ul>
                    <a href="<?php $this->permalink() ?>" class="post-foot-link fr">阅读更多</a>
            </footer>
        </article>
        <?php endwhile; ?>
    </div>
            <nav class="page-nav"><?php $this->pageNav('«', '»'); ?></nav>
        </div>
    </div><!-- #md-8 end -->
    
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
