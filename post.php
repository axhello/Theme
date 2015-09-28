<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <article class="post clear">
        <header class="post-head">
            <h3 class="post-title"><?php $this->title() ?></h3>
            <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
        </header>
        <section class="post-content">
            <?php $this->content(); ?>
        </section>
        <div class="post-foot">
            <footer class="post-foot-warp clear">
                <ul class="post-tag icon-tag fl">
                     <li><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
                </ul>
                            
            </footer>
        </div>
    </article>
        <?php $this->need('comments.php'); ?>
   </div><!-- #main end -->
</div><!-- #md-8 end -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>