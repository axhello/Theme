<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

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
   <div class="boxcont"> <!-- article start -->
        <article class="post">
            <header class="post-head">
                <h3 class="post-title"><?php $this->title() ?></h3>
                    <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
            </header>
            <section class="post-content">
                <?php $this->content(); ?>
            </section>
            <footer class="post-foot-warp">
                <ul class="post-tag fl">
                    <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
                </ul>                
            </footer>
        </article>
    </div><!-- article end -->
        <?php $this->need('comments.php'); ?>
    </div><!-- #main end -->
</div><!-- #md-8 end -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>