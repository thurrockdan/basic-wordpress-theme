<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>


 		<?php the_content(); ?>

 <?php endwhile; else : ?>


 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 <?php endif; ?>