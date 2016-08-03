<?php
/**
 * The template for displaying front landing page
 *
 * @package WordPress
 * @subpackage miry
 * @since miry 1.0
 */

get_header(); ?>

<div id="primary" class="front-content">
	<main id="main" class="site-main front-landing" role="main">
	
		<?php
		
		// Include the page content template.
		get_template_part( 'template-parts/content', 'frontwelcome' );

		// Include the page content template.
		get_template_part( 'template-parts/content', 'frontstory' );
		
		// Include the page content template.
		get_template_part( 'template-parts/content', 'frontmenu' );

		// Include the page content template.
        get_template_part( 'template-parts/content', 'frontsales' );

		// Include the page content template.
		get_template_part( 'template-parts/content', 'frontreservations' );

		// Include the page content template.
		get_template_part( 'template-parts/content', 'frontnews' );


        // Start the loop.
        while ( have_posts() ) : the_post();
            //  Content output of this page
            // End of the loop.
        endwhile;

		
        // Include the page content template.
        get_template_part( 'template-parts/content', 'frontcontacts' );

        // Include the page content template.
        get_template_part( 'template-parts/content', 'frontmap' );

        ?>
    </main><!-- main -->

	<?php // get_sidebar( 'content-bottom' ); ?>

</div><!-- .front-content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
