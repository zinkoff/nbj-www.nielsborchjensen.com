<?php
if (!function_exists('p')){
	function p($text){
		echo "<p>{$text}</p>";
	}
}

function nbj_hash2breaks($string){
return str_replace("#","</p><p class='skill-p'>",$string);
}

/*	Add our funtion to the widgets_init_hook.	*/
add_action('widgets_init','example_load_widgets');

/*	Function that registers our widgets	*/
function example_load_widgets(){
	register_widget('Example_Widget');
}

class Example_Widget extends WP_Widget{
	function Example_Widget() {
		/*	Widget settings.	*/
		$widget_ops = array('classname' => 'example','description' => 'An example widget that displays a persons\'s name and sex.');
		/*	Widget control settings.	*/
		$control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'example-widget');
		/*	Create the widget.	*/
		$this->WP_Widget('example-widget', 'Example Widget',$widget_ops,$control_ops);
	}

}
?>