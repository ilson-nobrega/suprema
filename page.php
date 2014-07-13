<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="col-md-4 box">
                <?php

                    the_post_thumbnail('medium', array('class' => 'img-responsive'));
        
                  ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[gallery link="file"]'); ?>
            </div>
        </article>
    <?php endwhile?>
     
    <?php else: ?>
        <article>
            404. Sem resultados
        </article>
    <?php endif; ?>
                    
<?php get_footer(); ?>