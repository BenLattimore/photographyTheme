<?php get_header(); ?>

<div class="col-sm-9">
    <p>single page</p>
    <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>

    <?php endwhile; else: ?>


        <p>Ooops! Something went wrong.</p>


    <?php endif; ?>


</div>

<?php get_footer(); ?>