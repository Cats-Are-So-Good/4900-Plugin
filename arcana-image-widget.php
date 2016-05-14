<?php 
/*
Plugin Name: Arcana Image Plugin
Version: 1.0
Description: A set of buttons which can be turned on/off.
Author: Marisa Doig
*/

add_action( 'widgets_init', 'arcana_image_widget_init' );
 
function arcana_image_widget_init() {
    register_widget( 'arcana_image_widget' );
}
 
class arcana_image_widget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'arcana_image_widget',
            'description' => 'A set of buttons which can be turned on/off.'
        );
 
        parent::__construct( 'arcana_image_widget', 'Arcana Image Widget', $widget_details );
 
    }
 
    public function form( $instance ) {
		$title = '';
		if( !empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
	 
		$text1 = '';
		if( !empty( $instance['text1'] ) ) {
			$text1 = $instance['text1'];
		}
		
		$image1 = '';
		if( !empty( $instance['image1'] ) ) {
			$image1 = $instance['image1'];
		}
		
		$link1 = '';
		if( !empty( $instance['link1'] ) ) {
			$link1 = $instance['link1'];
		}
		
		$text2 = '';
		if( !empty( $instance['text2'] ) ) {
			$text1 = $instance['text2'];
		}
		
		$image2 = '';
		if( !empty( $instance['image2'] ) ) {
			$image2 = $instance['image2'];
		}
		
		$link2 = '';
		if( !empty( $instance['link2'] ) ) {
			$link2 = $instance['link2'];
		}
		
		$text3 = '';
		if( !empty( $instance['text3'] ) ) {
			$text3 = $instance['text3'];
		}
		
		$image3 = '';
		if( !empty( $instance['image3'] ) ) {
			$image3 = $instance['image3'];
		}
		
		$link3 = '';
		if( !empty( $instance['link3'] ) ) {
			$link3 = $instance['link3'];
		}
		
		$text4 = '';
		if( !empty( $instance['text4'] ) ) {
			$text4 = $instance['text4'];
		}
		
		$image4 = '';
		if( !empty( $instance['image4'] ) ) {
			$image4 = $instance['image4'];
		}
		
		$link4 = '';
		if( !empty( $instance['link4'] ) ) {
			$link4 = $instance['link4'];
		}
 
 
    ?>
 
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="customText" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
	
	<div class="inputArea">
		<b>First Button:</b><br/>
		
		<p>        
			<label for="<?php echo $this->get_field_name( 'text1' ); ?>"><?php _e( 'Text:' ); ?></label><br/>
			<textarea class="customTA" id="<?php echo $this->get_field_id( 'text1' ); ?>" name="<?php echo $this->get_field_name( 'text1' ); ?>" type="text" ><?php echo esc_attr( $text1 ); ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'image1' ); ?>"><?php _e( 'Image Path:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_attr( $image1 ); ?>" />
			<input type="button" value="Browse.." id="button1" name="button1" class="customButton"/>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'link1' ); ?>"><?php _e( 'Link:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'link1' ); ?>" name="<?php echo $this->get_field_name( 'link1' ); ?>" type="text" value="<?php echo esc_attr( $link1 ); ?>" />
		</p>
	</div>
 
	<div class="inputArea">
	<b>Second Button:</b><br/>
		<p>        
			<label for="<?php echo $this->get_field_name( 'text2' ); ?>"><?php _e( 'Text:' ); ?></label><br/>
			<textarea class="customTA" id="<?php echo $this->get_field_id( 'text2' ); ?>" name="<?php echo $this->get_field_name( 'text2' ); ?>" type="text" ><?php echo esc_attr( $text2 ); ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'image2' ); ?>"><?php _e( 'Image Path:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo esc_attr( $image2 ); ?>" />
			<input type="button" value="Browse.." id="button2" name="button2" class="customButton"/>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'link2' ); ?>"><?php _e( 'Link:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>" />
		</p>
	</div>
		
	<div class="inputArea">
	<b>Third Button:</b><br/>
		<p>        
			<label for="<?php echo $this->get_field_name( 'text3' ); ?>"><?php _e( 'Text:' ); ?></label><br/>
			<textarea class="customTA" id="<?php echo $this->get_field_id( 'text3' ); ?>" name="<?php echo $this->get_field_name( 'text3' ); ?>" type="text" ><?php echo esc_attr( $text3 ); ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'image3' ); ?>"><?php _e( 'Image Path:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" type="text" value="<?php echo esc_attr( $image3 ); ?>" />
			<input type="button" value="Browse.." id="button3" name="button3" class="customButton"/>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'link3' ); ?>"><?php _e( 'Link:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'link3' ); ?>" name="<?php echo $this->get_field_name( 'link3' ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>" />
		</p>
	</div>
		
	<div class="inputArea">
	<b>Fourth Button:</b><br/>
		<p>        
			<label for="<?php echo $this->get_field_name( 'text4' ); ?>"><?php _e( 'Text:' ); ?></label><br/>
			<textarea class="customTA" id="<?php echo $this->get_field_id( 'text4' ); ?>" name="<?php echo $this->get_field_name( 'text4' ); ?>" type="text" ><?php echo esc_attr( $text4 ); ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'image4' ); ?>"><?php _e( 'Image Path:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image4' ); ?>" type="text" value="<?php echo esc_attr( $image4 ); ?>" />
			<input type="button" value="Browse.." id="button4" name="button4" class="customButton"/>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_name( 'link4' ); ?>"><?php _e( 'Link:' ); ?></label>
			<input class="customText" id="<?php echo $this->get_field_id( 'link4' ); ?>" name="<?php echo $this->get_field_name( 'link4' ); ?>" type="text" value="<?php echo esc_attr( $link4 ); ?>" />
		</p>
	</div>
 
    <div class='mfc-text'>
         
    </div>
 
    <?php
 
    echo $args['after_widget'];
    }
 
    public function update( $new_instance, $old_instance ) {  
        return $new_instance;
    }
 
    public function widget( $args, $instance ) {
        // Frontend display HTML
    }
 
}