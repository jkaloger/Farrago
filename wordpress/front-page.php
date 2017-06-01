<?php
get_header();
?>
<button>See more</button>
<section class="hero">
    <div class="sliderGallery">
        <?php $post = get_post(get_theme_mod('main_headline'))
        ?>
        <a href="<?php echo get_post_permalink($post); ?>">
                <div class="sliderElement">
                    <div class="elementImage">
                        <?php echo get_the_post_thumbnail($post); ?>
                        <div class="elementDesc">
                            <h4><?php echo $post->post_title ?></h4>
                            <!--<h5><?php the_author(); ?></h5>-->
                        </div>
                    </div>
                </div>
            </a>
        <?php $post = get_post(get_theme_mod('fp_more_1'))
        ?>
        <a href="<?php echo get_post_permalink($post); ?>">
                <div class="sliderElement">
                    <div class="elementImage">
                        <?php echo get_the_post_thumbnail($post); ?>
                        <div class="elementDesc">
                            <h4><?php echo $post->post_title ?></h4>
                            <!--<h5><?php the_author(); ?></h5>-->
                        </div>
                    </div>
                </div>
            </a>
        <?php $post = get_post(get_theme_mod('fp_more_2'))
        ?>
        <a href="<?php echo get_post_permalink($post); ?>">
                <div class="sliderElement">
                    <div class="elementImage">
                        <?php echo get_the_post_thumbnail($post); ?>
                        <div class="elementDesc">
                            <h4><?php echo $post->post_title ?></h4>
                            <!--<h5><?php the_author(); ?></h5>-->
                        </div>
                    </div>
                </div>
            </a>
        <?php $post = get_post(get_theme_mod('fp_more_3'))
        ?>
        <a href="<?php echo get_post_permalink($post); ?>">
                <div class="sliderElement">
                    <div class="elementImage">
                        <?php echo get_the_post_thumbnail($post); ?>
                        <div class="elementDesc">
                            <h4><?php echo $post->post_title ?></h4>
                            <!--<h5><?php the_author(); ?></h5>-->
                        </div>
                    </div>
                </div>
            </a>
    </div>
</section>
<section>
    <div class="sectionTitle twelve columns">
        <h2><span>Campus</span></h2>
    </div>
    <div class="row sectionRow">
        <?php query_posts('category_name=campus&posts_per_page=5'); ?>
        <?php $i = 0; while (have_posts()) : the_post(); ?>
            <?php if($i == 0) {
                printf("%s", "<div class='twelve columns'>");
            } else {
                printf("%s", "<div class='one-half column'>");
            }
            ?>
            
                <div class="articleImg hvr-float">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h5 class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <a href="<?php printf("%s", get_permalink($a)); ?>" class="articleSubtitle"><?php printf("%s", apply_filters('the_title', $a->post_title)) ?></a>
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

</section>
<section>
    <div class="sectionTitle twelve columns">
        <h2><span>Culture</span></h2>
    </div>
    <div class="row sectionRow">
        <?php query_posts('category_name=culture&posts_per_page=5'); ?>
        <?php $i = 0; while (have_posts()) : the_post(); ?>
            <?php if($i == 0) {
                printf("%s", "<div class='twelve columns'>");
            } else {
                printf("%s", "<div class='one-half column'>");
            }
            ?>
            
                <div class="articleImg hvr-float">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h5 class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <a href="<?php printf("%s", get_permalink($a)); ?>" class="articleSubtitle"><?php printf("%s", apply_filters('the_title', $a->post_title)) ?></a>
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

</section>
<section>
    <div class="sectionTitle twelve columns">
        <h2><span>Commentary</span></h2>
    </div>
    <div class="row sectionRow">
        <?php query_posts('category_name=comment&posts_per_page=5'); ?>
        <?php $i = 0; while (have_posts()) : the_post(); ?>
            <?php if($i == 0) {
                printf("%s", "<div class='twelve columns'>");
            } else {
                printf("%s", "<div class='one-half column'>");
            }
            ?>
            
                <div class="articleImg hvr-float">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h5 class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <a href="<?php printf("%s", get_permalink($a)); ?>" class="articleSubtitle"><?php printf("%s", apply_filters('the_title', $a->post_title)) ?></a>
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

</section>
<section>
    <div class="sectionTitle twelve columns">
        <h2><span>Creative</span></h2>
    </div>
    <div class="row sectionRow">
        <?php query_posts('category_name=creative&posts_per_page=5'); ?>
        <?php $i = 0; while (have_posts()) : the_post(); ?>
            <?php if($i == 0) {
                printf("%s", "<div class='twelve columns'>");
            } else {
                printf("%s", "<div class='one-half column'>");
            }
            ?>
            
                <div class="articleImg hvr-float">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h5 class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <a href="<?php printf("%s", get_permalink($a)); ?>" class="articleSubtitle"><?php printf("%s", apply_filters('the_title', $a->post_title)) ?></a>
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

</section>
<?php
get_footer();
?>