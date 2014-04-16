<!-- This file is used to markup the public-facing widget. -->
<?php
extract( $args );
// these are the widget options
$title = apply_filters('widget_title', $instance['title']);
$number_of_comments = $instance['number_of_comments'];

// Display the widget
// Check if title is set
if ( $title ) {
	echo $before_title . $title . $after_title;
}
?>