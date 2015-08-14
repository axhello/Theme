<div><?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <?php $this->need('header.php'); ?>
  
      <?php if ($this->have()): ?>
      <div class="post">
          <div class="post-head">
            <h3 class="post-title"><?php $this->archiveTitle(array(
              'category'  =>  _t('分类 %s 下的文章'),
              'search'    =>  _t('包含关键字 %s 的文章'),
              'tag'       =>  _t('标签 %s 下的文章'),
              'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></h3>
        </div>
      </div>      
      <?php while($this->next()): ?>
  
             <article class="post">
              <header class="post-head">
                  <h3 class="post-title"> <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                  <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
              </header>
              <section class="post-content">
                  <?php $this->excerpt('200', '...') ?>
              </section>
              <div class="post-foot">
                  <footer class="post-foot-warp clear">
                      <ul class="post-tag icon-tag fl">
                          <li><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
                      </ul>
                      <a href="<?php $this->permalink() ?>" class="post-foot-link fr">阅读更多</a>
                  </footer>
              </div>
          </article>
            
          <?php endwhile; ?>
              <nav>
                  <ul class="pagination">
                   <li><?php $this->pageNav('&laquo;', '&raquo;'); ?></li>
                  </ul>
              </nav>
          </div>
      </div><!-- #md-8 end -->
          <?php else: ?>
          <div class="post">
              <div class="post-head">
                  <h3 class="post-title"><?php _e('并没有找到你要的'); ?></h3>
              </div>
          </div>
        </div>
      </div><!-- #md-8 end -->
          <?php endif; ?>
    
  <?php $this->need('sidebar.php'); ?>
  <?php $this->need('footer.php'); ?></div>