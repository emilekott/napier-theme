<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!-- The class "grid_4" sets the sidebar to be 4 columns wide and "prefix_1" sets one empty column before the sidebar for spacing -->
<div id="sidebar" class="grid_3">
    <ul>
        <?php
        if (dynamic_sidebar('default-sidebar')) :
        else :
            ?>

        <em>There are no widgets currently enabled</em>
        <?php endif; ?>
    </ul>
</div><!-- end sidebar -->
<div class="clear">&nbsp;</div>

