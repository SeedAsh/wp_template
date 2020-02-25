<?php get_header(); ?>
<div class="post container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            //获取下一篇文章的信息，并且将信息存入全局变量 $post 中
            the_post();
            get_template_part("template-parts/post", "item");
    ?>
         
    <?php
        }
    } else {
        echo '没有日志可以显示';
    }
    posts_nav_link();
    ?>
</div>

<?php get_footer(); ?>