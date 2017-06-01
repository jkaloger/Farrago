<?php get_header(); $i = 1;?>


<section>
    <div class="sectionTitle twelve columns">
        <h2><span><?php echo get_the_author();	?></span></h2>
    </div>

    <?php if ( have_posts() ) : ?>
    <div class="row sectionRow">
        <?php while (have_posts()) : the_post(); ?>
            <div class="one-half column">
                <div class="articleImg hvr-float">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h5 class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <span class="articleSubtitle"><?php the_author(); ?></span>
                <p class="articlePreview"><?php the_excerpt(); ?></p>
                <span class="articleAge"><?php the_date(); ?></span>
                <?php
                $before = "<div class='tag hvr-underline-from-left'>";
                $sep = "</div> <div class='tag hvr-underline-from-left'>";
                $after = "</div>";
                the_tags($before, $sep, $after);
                ?>
            </div>
           <?php if($i % 2 == 0) {
           	printf("%s", "</div><div class='row sectionRow'>");
           }
           $i++;
           ?>
           
        <?php endwhile; ?>
    </div>
    <div class=""><?php next_posts_link( 'Older posts' ); ?></div>
	<div class=""><?php previous_posts_link( 'Newer posts' ); ?></div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
