<?php
//get all the data
$misc_marketing = new WP_Query('category_name=misc-marketing&showposts=9');
$napier_news = new WP_Query('category_name=napier-news&showposts=9');
$about_napier = new WP_Query('category_name=news-about-napier&showposts=9');




echo show_blog('marketing-blog','misc-marketing', 'Marketing Blog', $misc_marketing);//marketing blog
echo show_blog('napier-news','napier-news', 'Napier News', $napier_news);//napier news
echo show_blog('about-napier','news-about-napier' ,'About Napier', $about_napier);//about napier

?>

<?php
/*
 * Function echos blog teasers in a div
 */
function show_blog($blogID, $slug, $blog_name, $the_query) {
    $cat = get_category_by_slug($slug);
    $id = $cat->term_id;
    $link = get_category_link($id);
    $return = '<div class="blog-box" id="' . $blogID . '"><h3><a href="'.$link.'">' . $blog_name . '</a></h3>';
    while ($the_query->have_posts()) :
        $the_query->the_post();
        $return .= '<li><a href="' . get_permalink(get_the_ID()) . '">' . get_the_title() . '</a></li>';
    endwhile;
    wp_reset_postdata();
    $return .= '</div>';
    return $return;
}

?>