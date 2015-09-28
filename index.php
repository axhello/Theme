<?php
/**
 * 这是一款仿V2EX的Typecho主题
 * 
 * @package For V2EX Theme 
 * @author Axhello
 * @version 1.0
 * @link http://ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
        <?php while($this->next()): ?>
        <article class="post clear">
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
    
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>