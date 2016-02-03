<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
                
         <div class="col-md-4"><!-- #md-4 start -->
                    <div class="rightbar">
                        <section class="box-info">
                            <div class="info">
                             <?php $this->author->gravatar(); ?>
                                <p><?php $this->author(); ?></p>
                            </div>
                            <div class="table-info">
                                <a href="#" class="github" title="Github"></a> 
                                <a href="#" class="twitter" title="Twitter"></a>
                                <a href="#" class="sina_weibo" title="Weibo"></a>
                                <a href="#" class="QQ" title="QQ"></a>
                                <a href="<?php $this->options->feedUrl(); ?>" class="RSS" title="RSS"></a>
                            </div>
                        </section>
                        <section class="box-art">
                            <div class="article">
                                <div class="cell">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><span class="fcolor"><?php _e('最新文章'); ?></span>
                                </div>
                                <ul>
                                    <?php $this->widget('Widget_Contents_Post_Recent','pageSize=6')
                                    ->parse('<li class="cell"><a href="{permalink}">{title}</a></li>'); ?>
                                </ul>
                            </div>
                        </section>
                        <section class="box-rep">
                            <div class="reply">
                                <div class="cell">
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="fcolor"><?php _e('最近回复'); ?></span>
                                </div>
                                <ul >
                                    <?php $this->widget('Widget_Comments_Recent', 'pageSize=6')->to($comments); ?>
                                    <?php while($comments->next()): ?>
                                    <li class="cell"><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(20, '[...]'); ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </section>
                        <section class="box-link">
                            <div class="links">
                                <div class="cell">
                                     <span class="glyphicon glyphicon-send" aria-hidden="true"></span><span class="fcolor">友情链接</span>
                                </div>
                                <div class="cell">
                                <span><a href="#">链接Link</a></span>
                                </div>
                                <div class="cell">
                                    <span><a href="#">链接Link</a></span>
                                </div>
                                <div class="cell">
                                    <span><a href="#">链接Link</a></span>
                                </div>
                                <div class="cell">
                                    <span><a href="#">链接Link</a></span>
                                </div>
                            </div>
                        </section>
                    </div>
        </div><!-- #md-4 end -->
