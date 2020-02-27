<div class="row">
    <div class="post-item col-lg border">
        <div class="post-title">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <h2>
        </div>
        <div class="post-meta">
            <?php the_category(','); ?>
            <?php the_author(); ?>
            <?php the_time('Y-m-d'); ?>
            <?php edit_post_link(' Edit ', ' <span>|</span> ', ''); ?>
        </div>
        <div class="post-content"><?php the_content(); ?></div>
     
    </div>
</div>