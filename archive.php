<div><?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
    <div class="boxcont"><!-- article start -->
      <?php if ($this->have()): ?>
      <article class="post">
          <header class="post-head">
            <h3 class="post-title"><?php $this->archiveTitle(array(
              'category'  =>  _t('分类 %s 下的文章'),
              'search'    =>  _t('包含关键字 %s 的文章'),
              'tag'       =>  _t('标签 %s 下的文章'),
              'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></h3>
        </header>
      </article>      
      
      <?php while($this->next()): ?>
            
          <article class="post">
              <header class="post-head">
                  <h3 class="post-title"> <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                  <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
              </header>
              <section class="post-content">
                  <?php $this->excerpt('200', '...') ?>
              </section>
              <footer class="post-foot-warp">
                  <ul class="post-tag fl">
                          <li><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
                  </ul>
                      <a href="<?php $this->permalink() ?>" class="post-foot-link fr">阅读更多</a>
              </footer>
          </article>

      <?php endwhile; ?>
            </div>   <!-- article end -->
                    <nav class="page-nav"><?php $this->pageNav('«', '»'); ?></nav>
                </div><!-- #main end -->
            </div><!-- #md-8 end -->
      <?php else: ?>
            <div class="post">
                <div class="post-head">
                    <h3 class="post-title"><?php _e('并没有找到你要的'); ?></h3>
                </div>
            </div>
          </div><!-- #main end -->
        </div><!-- #md-8 end -->
      </div><!-- #md-8 end -->
      <?php endif; ?>
    
  <?php $this->need('sidebar.php'); ?>
  <?php $this->need('footer.php'); ?></div>