<?php get_header(); ?>

<div class="col-sm-9" id="fpBlock" style="background: url(http://localhost/WP_SatinStar/wp-content/themes/SatinStar/img/tumblr_n9hxdqatsK1st5lhmo1_1280.jpg) no-repeat center center; background-size: cover;">
    <?php if ( have_posts() ) : while  ( have_posts() ) : the_post();   ?>

        <?php the_content(); ?>

    <?php endwhile; else: ?>


        <p>Ooops! Something went wrong.</p>


    <?php endif; ?>


</div>
<?php get_footer(); ?>