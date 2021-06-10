<br>

<footer>
<div class="container-fluid navbar-expand-lg navbar-light bg-light">
    <div class="row g-2">

        <div class="col-md-4 align-self-start">

            <a class="" href="<?php echo home_url( '/' ); ?>">

                <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="" height="90" class="d-inline-block align-text-top">

            </a>

        </div>


        <div class="align-self-center col-md-4 offset-md-4">

            <form class="d-flex" role="search" method="get" action="">

                <input class="form-control me-2" type="search" placeholder="...">

                <button class="btn btn-outline-success" type="submit">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>

                </button>

            </form>

        </div>

    </div>

    <div class="row">

        <div class="col-12 text-center justify-content-center">
            <p>
            </p>
        </div>

    </div>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>