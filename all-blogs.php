<?php
//get all the data
$misc_marketing = new WP_Query('category_name=misc-marketing&showposts=9');
$napier_news = new WP_Query('category_name=napier-news&showposts=9');
$about_napier = new WP_Query('category_name=news-about-napier&showposts=9');




echo show_blog('marketing-blog', 'Marketing Blog', $misc_marketing);//marketing blog
echo show_blog('napier-news', 'Napier News', $napier_news);//napier news
echo show_blog('about-napier', 'About Napier', $about_napier);//about napier

?>

<?php
/*
 * Function echos blog teasers in a div
 */
function show_blog($blogID, $blog_name, $the_query) {
    $return = '<div class="blog-box" id="' . $blogID . '"><h3>' . $blog_name . '</h3>';
    while ($the_query->have_posts()) :
        $the_query->the_post();
        $return .= '<li><a href="' . get_permalink(get_the_ID()) . '">' . get_the_title() . '</a></li>';
    endwhile;
    wp_reset_postdata();
    $return .= '</div>';
    return $return;
}

?>