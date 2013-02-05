<?php
/*
  Template Name: Links
 */
?>

<?php get_header(); ?>

<div id="content" class="grid_9">
    <div id="content-inner">

        <h3>Links:</h3>
        <ul>
            <?php wp_list_bookmarks(); ?>
        </ul>
    </div>
</div><!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
