<!-- This file is used to markup the administration form of the widget. -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Titre :", "extra-widget-menu-page"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"/>
</p>                                                                                                                                                                                                           