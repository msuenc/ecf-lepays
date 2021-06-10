<?php get_header(); ?>

<aside class="col-auto me-auto p-2 sidebar w-25 bg-light">

    <?php dynamic_sidebar( 'blog-sidebar' ); ?>

</aside>

<main>

    <div class="container">

        <?php $args = array(
            'posts_per_page' => 9,
            'order' => 'DESC'
        ); ?>

        <?php $rp = new WP_Query( $args ); ?>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

            <?php if($rp->have_posts()) : 
                while($rp->have_posts()) : 
                $rp->the_post(); 
            ?>

            <div class="col">

                <div class="card mb-3" style="border: 1px solid #2CACEB;">

                    <div class="card-header d-flex justify-content-center text-center m-0 p-0" style="background-color: #e3f2fd;">

                        <?php the_category(); ?>

                    </div>

                    <?php the_post_thumbnail();?>

                    <div class="card-body">

                        <h5 class="card-title text-center"><?php the_title(); ?></h5>

                        <p class="card-text extArticles lh-1">

                            <?php print substr(get_the_excerpt(), 0, 70) . "…"; ?>

                        </p>

                        <p class="card-text text-center">

                            <small class="text-muted">

                                Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                                
                                <br>
                                
                                par <?php the_author(); ?>

                                <br>

                                <?php comments_number(); ?>

                            </small>

                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-primary d-grid gap-2">Lire la suite</a>

                    </div>

                    <div class="card-footer text-muted text-center" style="background-color: #e3f2fd;">

                        <?php the_tags(); ?>

                    </div>

                </div>
                
            </div>

            <?php endwhile;?>

            <?php  wp_reset_postdata(); endif; ?>

        </div>

    </div>

</main>


<?php get_footer(); ?>