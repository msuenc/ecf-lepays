<div id="commentaires" class="">
    <?php if ( have_comments() ) : ?>
        <h2 class="">

            <?php echo get_comments_number(); // Nombre de commentaires ?> Commentaire(s)

        </h2>
    
        <ol class="">

            <?php
            	// La fonction qui liste les commentaires
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 25,
                ) );
            ?>

        </ol>
        
        <?php 
    		// S'il n'y a pas de commentaires
    		else : 
    	?>

        <p class="">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
    	</p>

    <?php endif; ?>
 
    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>

</div>