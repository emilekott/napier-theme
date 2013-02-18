<?php
    $meta = get_post_meta(get_the_ID());
    $testimonial = $meta['testimonial'][0];
    $results = $meta['results'][0];

?>

<div class="clear"></div>

<div class="grid_9" id="homepage-boxes">
    <div class="grid_4 alpha">
        <div class="box testimonial">
            <div class="box-inner">
                <h2>Client Testimonials</h2>
                <p><?php echo $testimonial; ?></p>
            </div>
        </div>
    </div>
    
    
    <div class="grid_5 omega">
        <div class="box results">
            <div class="box-inner">
                <h2>Results</h2>
                <p><?php echo $results; ?></p>
            </div>
        </div>
    </div>
    
    
    <div class="clear" style="height:20px;"></div>
    
    
    <div class="grid_4 alpha">
        <div class="box">
            <div class="box-inner">
                <h2>Engage with Napier</h2>
                <table class="contact">
                    <tr><td><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tel.png" alt="Tel:" /><td class="contact-details">0207 078 0849</td><td><a href="#"><img class="social-button" src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.png" /></a><a href="#"><img class="social-button middle" src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" /></a><a href="#"><img class="social-button" src="<?php bloginfo('stylesheet_directory'); ?>/images/other.png" /></a></td></tr>
                    <tr><td><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mail.png" alt="Tel:" /><td class="contact-details"><a href="mailto:mike@napier.co.uk">mike@napier.co.uk</a></td><td><a href="#"><img class="social-button" src="<?php bloginfo('stylesheet_directory'); ?>/images/linked-in.png" /></a><a href="<?php bloginfo('rss2_url'); ?>"><img class="social-button middle" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" /></a><a href="#"><img class="social-button" src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" /></a></td></tr>
                </table>
            </div>
        </div>
    </div>
    
    
    <div class="grid_5 omega">
        <div class="order-book box">
            <a href="#"></a>
        </div>
    </div>
</div>
<div class="grid_3">
    <div class="news-feed">
        <div class="box-inner">
            <h2>Our Blogs</h2>
            <?php
            $args = array(
                'posts_per_page' => 4,
                'category_name' => "category_name=misc-marketing,napier-news,news-about-napier",
            );
            $the_query = new WP_Query($args);


            while ($the_query->have_posts()) :
                $the_query->the_post();
                echo '<li><a href="' . get_permalink(get_the_ID()) . '">' . get_the_title() . '</a></li>';
            endwhile;


            wp_reset_postdata();
            ?>
        </div>

    </div>
</div>
<div class="clear"></div>