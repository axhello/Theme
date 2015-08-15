<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
                
                <div class="col-md-4"><!-- #md-4 start -->
                    <div class="rightbar">
                        <section class="box">
                            <div class="info">
                                <img src="<?php $this->options->themeUrl('img/head.png'); ?>" alt="head">
                                <p>Axhello</p>
                            </div>
                            <div class="table-info">
                                <div class="table-1">
                                    <a href="#">
                                        <span>10</span><br/>
                                    </a>
                                    <span><?php _e('最新文章'); ?></span>
                                </div>
                                <div class="table-2">
                                    <a href="#">
                                        <span>10</span><br/>
                                    </a>
                                    <span><?php _e('最近回复'); ?></span>
                                </div>
                                <div class="table-3">
                                    <a href="#">
                                        <span>10</span><br/>
                                    </a>
                                    <span><?php _e('友情链接'); ?></span>
                                </div>
                            </div>
                        </section>
                        <section class="box">
                            <div class="article">
                                <div class="cell">
                                    <span class="fcolor"><?php _e('最新文章'); ?></span>
                                </div>
                                <ul>
                                    <?php $this->widget('Widget_Contents_Post_Recent')
                                    ->parse('<li class="cell"><a href="{permalink}">{title}</a></li>'); ?>
                                </ul>
                            </div>
                        </section>
                        <section class="box">
                            <div class="reply">
                                <div class="cell">
                                    <span class="fcolor"><?php _e('最近回复'); ?></span>
                                </div>
                                <ul class="cell">
                                    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                                    <?php while($comments->next()): ?>
                                    <li class="cell"><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(10, '[...]'); ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div><div></div>
                        </section>
                        <section class="box-link">
                            <div class="links">
                                <div class="cell">
                                    <span class="fcolor">友情链接</span>
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
            </div><!-- #row end -->
        </div><!-- #container end -->
    </div>