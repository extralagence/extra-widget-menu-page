<!-- This file is used to markup the administration form of the widget. -->
<p>
	<input type="checkbox" id="<?php echo $this->get_field_id('show_root'); ?>" name="<?php echo $this->get_field_name('show_root'); ?>" value="1"<?php if ($instance['show_root']) echo ' checked="checked"'; ?>/> <label for="<?php echo $this->get_field_id('show_root'); ?>"><?php _e("Afficher le premier parent", "extra-widget-menu-page"); ?></label>
</p>
