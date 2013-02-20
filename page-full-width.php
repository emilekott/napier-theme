<?php
/*
  Template Name: Full Width
 */
?>

<?php get_header(); ?>
<div id="content" class="grid_12">
    <div id="content-inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <div class="entry">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                    </div><!-- end entry -->

                </div><!-- end post -->

            <?php endwhile;
        endif; ?>
    </div>
</div><!-- end content -->
<div class="clear"></div>
<?php get_footer(); ?>