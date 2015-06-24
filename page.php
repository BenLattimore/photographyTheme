<?php get_header(); ?>

<div class="col-sm-9" id="pageBlock">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
    <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; else: ?>


        <p>Ooops! Something went wrong.</p>


    <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>