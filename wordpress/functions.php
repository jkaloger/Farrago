<?php
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-background' );
/* FROM PREVIOUS (nigel) THEME */
function get_post_authors($connector, $type, $join = ', ') {
	$authors = array();
	$has_ctors = false;
	foreach($connector as $author) {
		$roles = p2p_get_meta($author->p2p_id, 'role', false);
		foreach($roles as $r) {
			$authors[$r] or $authors[$r] = array();
			$authors[$r][] = $author;
			$has_ctors = true;
		}
	}
	isset($authors[$type]) or $authors[$type] = array();
	return implode($join, array_map('_map_get_title', $authors[$type]));
}

function farrago_customise_register($wp_customize) {
	$wp_customize->add_section('farrago_fp', array(
		'title' =>    'farrago front page settings',
		'priority' => 30,
	));
	$wp_customize->add_section('farrago_campus', array(
		'title' =>    'farrago campus page settings',
		'priority' => 31,
	));

	class Farrago_PostSelector_Control extends WP_Customize_Control {
		public $type = 'selector';

		public function render_content() {
			echo '<label><span class="customize-control-title">' . $this->label . '</span>';
			echo '<input type="text" ';
			$this->link();
		   	echo ' value="' . esc_attr(($this->value)) . '">';
		}
	}

	$wp_customize->add_setting('main_headline', array( 'transport' => 'refresh', 'default' => 1, ));
	$wp_customize->add_setting('fp_more_1',     array( 'transport' => 'refresh', 'default' => 1, ));
	$wp_customize->add_setting('fp_more_2',     array( 'transport' => 'refresh', 'default' => 1, ));
	$wp_customize->add_setting('fp_more_3',     array( 'transport' => 'refresh', 'default' => 1, ));

	foreach( array(
		#      user-visible name             setting name     section
		array('Main headline (post ID)',     'main_headline',        'farrago_fp'),
		array('First “More” post (post ID)', 'fp_more_1',            'farrago_fp'),
		array('Second “More” post (post ID)','fp_more_2',            'farrago_fp'),
		array('Second “More” post (post ID)','fp_more_3',            'farrago_fp'),
	) as $z) {
		$wp_customize->add_control( new Farrago_PostSelector_Control($wp_customize, "$z[1]_ctl", array(
			'label'    => $z[0],
			'settings' => $z[1],
			'section'  => $z[2],
		)));
	}
}

add_action('customize_register', 'farrago_customise_register');
?>