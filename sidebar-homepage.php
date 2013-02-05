
<div class="grid_2">
    <div id="side-image">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Lightbulb.jpg" alt="Lightbulb" />
    </div>
</div>

<div id="sidebar" class="grid_3">
    <ul>
        <?php
        if (dynamic_sidebar('home-sidebar')) :
        else :
            ?>

        <em>There are no widgets currently enabled</em>
        <?php endif; ?>
    </ul>
</div><!-- end sidebar -->
