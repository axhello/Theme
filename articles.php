<?php 
/**
* 文章归档模板
*
* @package custom
*/
?>
<?php $this->need('header.php'); ?>
	
<div class="wrapper"><!-- #wrapper start -->
    <div class="container">
    <div class="row"><!-- #row start -->
        <div class="col-md-12"><!-- #md-8 start -->
            <div class="main_arc"><!-- #main start -->
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
            <section class="post-content">
                <?php
					$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
					    $year=0; $mon=0; $i=0; $j=0;   
					    $output = '<div id="archives">';   
					    while($archives->next()):   
					        $year_tmp = date('Y',$archives->created);   
					        $mon_tmp = date('F',$archives->created);
					        $day_tmp = date('d',$archives->created);  
					        $y=$year; $m=$mon;   
					        // if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
					        if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
					        if ($year != $year_tmp) {   
					            $year = $year_tmp;   
					            $output .= '<h3 class="al_year">'. $year .' 年</h3><ul class="articles-ul">'; //输出年份   
					        }   
					        // if ($mon != $mon_tmp) {   
					            $mon = $mon_tmp;   
					            // $output .= '<li><span class="al_mon">'. $mon .' 月</span><ul class="al_post_list">'; //输出月份   
					        // } 
					            $day = $day_tmp;  
					        $output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a>&nbsp;(<time>'.$mon.' '.$day.','.$year.'</time>)</li>'; //输出文章日期和标题   
					    endwhile;   
					    $output .= '</ul></li></div>';   
					    echo $output;   
					?>
            </section>
        </article>
    </div><!-- article end -->
    </div><!-- #main end -->
</div><!-- #md-8 end -->
<?php $this->need('footer.php'); ?>