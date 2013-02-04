<?php get_header(); ?>
<?php get_template_part( 'panels' ); ?> 


	<!-- The class "grid_7" restricts the div to 7 columns wide -->
	<div id="content" class="grid_7">
            <div id="content-inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div><!-- end entry -->
			
		</div><!-- end post -->
		
		<?php endwhile; endif; ?>
            </div>
	</div><!-- end content -->
        
<?php get_sidebar('homepage'); ?>        
<?php get_template_part( 'homepage-boxes' ); ?>
<?php get_footer(); ?>