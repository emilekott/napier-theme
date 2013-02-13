<?php
/*
  Template Name: Blog
 */
?>

<?php get_header(); ?>

<div id="content" class="grid_9">
    <div id="content-inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <div class="entry">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                    </div><!-- end entry -->

                </div><!-- end post -->

                <?php
            endwhile;
        endif;
        ?>

        <?php
        $category_slug = get_post_meta(get_the_ID(), category_slug);
        
        
        wp_reset_postdata();
        
        if ($category_slug){
            $args = 'category_name='.$category_slug[0];
        }
        else{
            $args = "post_type=post";
        }
        
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>

            <?php //$post = $posts[0]; // Hack. Set $post so that the_date() works.   ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div <?php post_class() ?>>
                    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <small><?php the_time('jS M Y') ?> &bull; <a href="<?php the_permalink() ?>#respond">Leave a comment</a></small>

                    <div class="entry">
                        <?php the_excerpt(); ?>
                        
                    </div><!-- end entry -->
                    
                    <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                    <p><a class="read-more" href="<?php the_permalink() ?>">Read More</a></p>
                </div><!-- end post -->

    <?php endwhile; ?>

            <div class="navigationBottom">
                <div class="alignleft"><?php //next_posts_link('&laquo; Older Entries') 
                        
                ?></div>
                <div class="alignright"><?php //previous_posts_link('Newer Entries &raquo;') ?></div>
            </div><!-- end navigation -->

            <!-- This clears all floats -->
            <div class="clear">&nbsp;</div>

    <?php
else :

    if (is_category()) { // If this is a category archive
        printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('', false));
    } else if (is_date()) { // If this is a date archive
        echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
    } else if (is_author()) { // If this is a category archive
        $userdata = get_userdatabylogin(get_query_var('author_name'));
        printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
    } else {
        echo("<h2 class='center'>No posts found.</h2>");
    }
    get_search_form();

endif;
?>


            <p>View all posts in <?php the_category(' '); ?></p>
    </div>
</div><!-- end content -->




<?php get_sidebar(); ?>

<?php get_footer(); ?>
