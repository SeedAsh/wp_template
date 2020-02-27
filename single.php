<?php get_header(); ?>
<div class="post container">
    <?php
    the_post();
    get_template_part("template-parts/post", "content");
    posts_nav_link();
    ?>
</div>
<div>
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>