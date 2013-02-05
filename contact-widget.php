<?php
/*
  Plugin Name: Contact Widget for Napier
  Plugin URI: http://acroweb.co.uk
  Description: A widget to display a sidebar contact card
  Author: Emile Kott
  Version: 1
  Author URI: http://acroweb.co.uk
 */

class ContactWidget extends WP_Widget {

    function ContactWidget() {
        $widget_ops = array('classname' => 'ContactWidget', 'description' => 'Displays a sidebar contact card');
        $this->WP_Widget('ContactWidget', 'Contact Card', $widget_ops);
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('title' => '', 'name' => '' ,'job'=> '', 'email'=>'', 'img' => '' , 'twitter' => '' , 'linked' => ''));
        $title = $instance['title'];
        $name = $instance['name'];
        $job = $instance['job'];
        $email = $instance['email'];
        $img = $instance['img'];
        $twitter = $instance['twitter'];
        $linked = $instance['linked'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('name'); ?>">Name: <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo attribute_escape($name); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('img'); ?>">Image Path: <input class="widefat" id="<?php echo $this->get_field_id('img'); ?>" name="<?php echo $this->get_field_name('img'); ?>" type="text" value="<?php echo attribute_escape($img); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('job'); ?>">Job Title: <input class="widefat" id="<?php echo $this->get_field_id('job'); ?>" name="<?php echo $this->get_field_name('job'); ?>" type="text" value="<?php echo attribute_escape($job); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('email'); ?>">Email: <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo attribute_escape($email); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter url: <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo attribute_escape($twitter); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('linked'); ?>">Linked in url: <input class="widefat" id="<?php echo $this->get_field_id('linked'); ?>" name="<?php echo $this->get_field_name('linked'); ?>" type="text" value="<?php echo attribute_escape($linked); ?>" /></label></p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['name'] = $new_instance['name'];
        $instance['job'] = $new_instance['job'];
        $instance['email'] = $new_instance['email'];
        $instance['img'] = $new_instance['img'];
        $instance['twitter'] = $new_instance['twitter'];
        $instance['linked'] = $new_instance['linked'];
        return $instance;
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);

        $img = $instance['img'];
        $name = $instance['name'];
        $job = $instance['job'];
        $email = $instance['email'];
        $twitter = $instance['twitter'];
        $linked = $instance['linked'];
       
        
        
        if (!empty($title))
            echo $before_title . $title . $after_title;;
            echo '<div id="contact-col-1">';
            if ($img){
                echo '<img class="contact-profile" src ="'.$img.'" alt="'.$name.'" />';
            }
            
            if ($twitter){
                echo '<a href="'.$twitter.'" target="_blank"><img class="twitter-link" src="'.get_bloginfo( 'template_url').'/images/twitter.png" /></a>';
            }
            
            if ($linked){
                echo '<a href="'.$linked.'" target="_blank"><img src="'.get_bloginfo( 'template_url').'/images/linked-in.png" /></a>';
            }
            echo '</div>';
            
            
            echo '<div id="contact-details">';
            if ($name) echo "<p>$name</p>";
            if ($job) echo "<p>$job</p>";
            if ($email) echo '<p><a href="mailto:'.$email.'">'.$email.'</a></p>';
            echo '</div><div class="clear"></div>';
            
            


        echo $after_widget;
    }

}

add_action('widgets_init', create_function('', 'return register_widget("ContactWidget");'));
?>