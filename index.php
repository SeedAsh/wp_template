<?php get_header(); ?>
<div class="post container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
            the_post();
    ?>
            <div class="row">
                <div class="post-item col-lg border">
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <h2>
                    </div>
                    <div class="post-content"><?php the_content(); ?></div>
                    <div class="post-meta">
                        <?php the_category(','); ?>
                        <?php the_author(); ?>
                        <?php the_time('Y-m-d'); ?>
                        <?php edit_post_link(' Edit ', ' <span>|</span> ', ''); ?>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo '没有日志可以显示';
    }
    ?>
</div>

<?php get_footer(); ?>