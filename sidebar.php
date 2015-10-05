<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
                
         <div class="col-md-4"><!-- #md-4 start -->
                    <div class="rightbar">
                        <section class="box-info">
                            <div class="info">
                             <?php $this->author->gravatar(); ?>
                                <p><?php $this->author(); ?></p>
                            </div>
                            <div class="table-info">
                                <a href="#" title="Github">
                                    <span class="icon-1"></span>
                                </a> 
                                <a href="#" title="Twitter">
                                    <span class="icon-2"></span>
                                </a>
                                <a href="#" title="Weibo">
                                    <span class="icon-3"></span>
                                </a>
                                <a href="#" title="Email">
                                    <span class="icon-4"></span>
                                </a>
                                <a href="#" title="Rss">
                                    <span class="icon-5"></span>
                                </a>
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
                                     <span class="glyphicon glyphicon-heart" aria-hidden="true"></span><span class="fcolor">友情链接</span>
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