<?php
/**
 * @package WordPress
 * 
 */
?>

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

