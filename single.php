<?php get_header(); ?>

<div id="content" class="grid_9">
    <div id="content-inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <h1><?php the_title(); ?></h1>
                    <p><em><?php the_time('jS M Y') ?></em> &bull; <a href="#respond">Leave a comment</a></p>
                    <div class="entry">
                        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                        <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
                        <blockquote>
                        <p>Follow responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.</p>

                            <?php if (('open' == $post->comment_status) && ('open' == $post->ping_status)) {
                                // Both Comments and Pings are open 
                                ?>
                                <p><a href="#respond">Leave a comment</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.</p>

        <?php } elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) {
            // Only Pings are Open 
            ?>
                               <p>Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.</p>

                            <?php } elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) {
                                // Comments are open, Pings are not 
                                ?>
                                <p>You can skip to the end and leave a response. Pinging is currently not allowed.</p>

                            <?php } elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) {
                                // Neither Comments, nor Pings are open 
                                ?>
                                <p>Both comments and pings are currently closed.</p>
                        </blockquote>
        <?php } edit_post_link('Edit this entry', '', '.'); ?>
                        

                    </div><!-- end entry -->

                </div><!-- end post -->

                <?php comments_template(); ?>

    <?php endwhile;
else: ?>

            <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
    </div>
</div><!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
