<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

	 <article class="post">
        <header class="post-head">
            <h3 class="post-title"><?php $this->title() ?></h3>
            <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('Y年m月d日'); ?></time>
        </header>
        <section class="post-content">
            <?php $this->content(); ?>
        </section>
    </article>
        <?php $this->need('comments.php'); ?>
    </div>
</div><!-- #md-8 end -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>