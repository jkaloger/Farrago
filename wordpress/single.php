<?php
p2p_type('authors_to_posts')->each_connected($wp_query);
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="post">
	<div id="postHead" class="row extend">
		<div class="four columns" style="text-align:right;">
			<!-- cat,title,date,author -->
			<span>
				<?php
					$category = get_the_category(); 
					echo $category[0]->cat_name;
				?>
			</span>
			<h1><?php the_title(); ?></h1>
			<span><?php the_date(); ?></span>
				<?php
// Get and display all the authors

$authors = array();
$has_ctors = false;
foreach($post->connected as $author) {
	$roles = p2p_get_meta($author->p2p_id, 'role', false);
	foreach($roles as $r) {
		$authors[$r] or $authors[$r] = array();
		$authors[$r][] = $author;
		$has_ctors = true;
	}
}
if($has_ctors) {
	$names = array(
		#                   singular  plural
		# Note this array also defines the order they appear
		'writer'      => array('Author', 'Authors'),
		'graphics'    => array('Graphics', 'Graphics'),
		'data'        => array('Data', 'Data'),
		'contributor' => array('Other Contributions', 'Other Contributors'),
	);
	foreach(array_keys($names) as $i) {
		if(! isset($authors[$i]) ) continue;
		//printf('<h5>%s</h5>', count($authors[$i]) > 1 ? $names[$i][1] : $names[$i][0]);

		foreach($authors[$i] as $a) {
		?>
		<p><a href="<?php echo get_permalink($a); ?>"><?php echo apply_filters('the_title', $a->post_title); ?></a><br />
		<?php  echo apply_filters('the_excerpt', $a->post_excerpt); ?></p>
		<?php } // foreach($authors as $a)
			}
		} // else if no contributors, print nothing
		?>
		</div>
		<div class="eight columns">
			<!-- image -->
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
<div class="see-more twelve columns">
    <h5><span class="see-more-button">see more</span></h5>
</div>
<br />
	<?php the_content(); ?>
</div>
<hr>
<?php comments_template(); ?>
<?php endwhile; // end of the loop. ?>
<?php
get_footer();
?>