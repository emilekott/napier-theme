<?php
/*
Template Name: Page-Linked
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
                //grab sibling pages (share a parent and prev / next in menu_order)
                
		$args= array ('child_of' => $post->post_parent,
					'parent' => $post->post_parent,
					'sort_column' => 'menu_order',
					'sort_order' => 'asc');
		$pagelist = get_pages($args);

		$thepages = array();
		foreach ($pagelist as $apage) {
			$thepages[] += $apage->ID;
			}

		$current = array_search($post->ID, $thepages);
		$prevID = $thepages[$current - 1];
		$nextID = $thepages[$current + 1];

                //If there are sibling pages, print links.
                    if (!empty($prevID)) {
                        $prev = '<a href="'.get_permalink($prevID).'">&laquo; '.get_the_title($prevID).'</a>';
                    }	
		
                    if (!empty($nextID)) {
			$next = '<a href="'.get_permalink($nextID).'">'.get_the_title($nextID).' &raquo;</a>';
                     } 
                 ?>
                
                <div class="navigationBottom">
			<div class="alignleft"><?php echo $prev; ?></div>
			<div class="alignright"><?php echo $next; ?></div>
		</div><!-- end navigation -->


            <?php endwhile;
        endif; ?>
    </div>
</div><!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>