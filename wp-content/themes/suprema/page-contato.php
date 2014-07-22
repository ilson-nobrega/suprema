<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="col-md-8 col-sm-7">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="col-md-4 col-sm-5 box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.7471387306646!2d-48.065451!3d-15.817281600000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3323f5640001%3A0x6d60acda4543a3cc!2sSetor+e+Norte+Qne+4%2C+19+-+Taguatinga%2C+DF%2C+72125-040!5e0!3m2!1spt-BR!2sbr!4v1405287171262" width="100%" height="600" frameborder="0" style="border:0"></iframe>
                
            </div>
        </article>
    <?php endwhile?>
     
    <?php else: ?>
        <article>
            404. Sem resultados
        </article>
    <?php endif; ?>
                    
<?php get_footer(); ?>