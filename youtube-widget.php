<?php
/*
  Plugin Name: Youtube Widget for Napier
  Plugin URI: http://acroweb.co.uk
  Description: A youtube widget to add Youtube videos to the sidebar
  Author: Emile Kott
  Version: 1
  Author URI: http://acroweb.co.uk
 */

class YoutubeWidget extends WP_Widget {

    function YoutubeWidget() {
        $widget_ops = array('classname' => 'YoutubeWidget', 'description' => 'Displays a sidebar youtube video');
        $this->WP_Widget('YoutubeWidget', 'Youtube Video', $widget_ops);
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('title' => '', 'description' => '', 'id' => '', 'lightbox' => '', 'link' => '', 'url' => ''));
        $title = $instance['title'];
        $description = $instance['description'];
        $id = $instance['id'];
        $lightbox = $instance['lightbox'];
        $link = $instance['link'];
        $url = $instance ['url'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('description'); ?>">Description: <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo attribute_escape($description); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('id'); ?>">YouTube ID: <input class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" value="<?php echo attribute_escape($id); ?>" /></label></p>
        <label for="<?php echo $this->get_field_id('lightbox'); ?>"><?php _e('Use ligtbox?: '); ?></label><br />
        <input class="checkbox" type="checkbox" <?php checked($instance['lightbox'], true) ?> id="<?php echo $this->get_field_id('lightbox'); ?>" name="<?php echo $this->get_field_name('lightbox'); ?>" />


        <p><label for="<?php echo $this->get_field_id('link'); ?>">Link title: <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo attribute_escape($link); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('url'); ?>">Link URL: <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo attribute_escape($url); ?>" /></label></p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['description'] = $new_instance['description'];
        $instance['id'] = $new_instance['id'];
        $instance['lightbox'] = (bool) $new_instance['lightbox'];
        $instance['link'] = $new_instance['link'];
        $instance['url'] = $new_instance['url'];
        return $instance;
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);

        if (!empty($title))
            echo $before_title . $title . $after_title;;
        $description = $instance['description'];
        $id = $instance['id'];
        $video_thumb = "http://img.youtube.com/vi/$id/0.jpg";
        $link = $instance['link'];
        $lightbox = $instance['lightbox'];
        $url = $instance['url'];
        // WIDGET CODE GOES HERE
        if ($description)
            echo "<p>$description</p>";
        
        if ($id) {
            if (isset($lightbox)) {
                if ($video_thumb) {
                    $num = $this->number;
                    echo '<a class="lbp-inline-link-'.$num.'" href="#"><img class="youtube-thumb" src="' . $video_thumb . '" width="200" /></a>';
                    ?>
                    <div style="display:none">
                        <div id="lbp-inline-href-<?php echo $num; ?>" style="">
                            <iframe width="800" height="444" src="http://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>


                    <?php
                }
            } else {
                echo '<iframe width="200" height="111" src="http://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>';
            }
        }


        if ($url)
            echo '<p class="widget-link"><a target="_blank" href="' . $url . '">' . $link . '</a></a>';


        echo $after_widget;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("YoutubeWidget");'));
?>