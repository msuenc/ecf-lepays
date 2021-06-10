<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="mb-3">

        <h1 class="fs-1 text-center"><?php the_title(); ?></h5>

        <div class="img-fluid">

            <?php the_post_thumbnail(); ?>

        </div>

        <div class="card-body">

            <p class="card-text text-center">

                <small class="text-muted">

                Publié le <?php the_time( get_option( 'date_format' ) ); ?> par <?php the_author(); ?>

                <br>

                Dans la catégorie <?php the_category(); ?> avec les <?php the_tags(); ?>

                </small>

            </p>

            <p class="card-text">

                <?php the_content(); ?>

                <br>

                <?php comments_template(); ?>

            </p>

        </div>


    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>