<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="col-md-4">
                <?php the_post_thumbnail('thumbnail'); ?>
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="col-md-6">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile?>
     
    <?php else: ?>
        <article>
            404. Sem resultados
        </article>
    <?php endif; ?>
                    
<?php get_footer(); ?>