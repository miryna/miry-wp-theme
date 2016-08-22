<?php
/**
 * The template for displaying front landing page
 *
 * @since miry 1.0
 */

get_header(); ?>

<?php
/**
* Output of Frontpage sections administered as posts of category "Frontpage" in status "draft"
*/
    $args = array(
        'category_name' => 'frontpage',
        'post_type' => 'post',
        'post_status' => 'draft',
        'nopaging' => true
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {

    // Прохождение по результатам в цикле.
        while ( $query->have_posts() ) {
            $query->the_post();

            $fs_title = get_the_title();
            $fs_content = get_the_content();

            // Associative array contains the content of frontpage sections
            $front_sections[ $fs_title ] = $fs_content;
        }
    }
?>


<div id="primary" class="front-content">
	<main id="main" class="site-main front-landing" role="main">

		<?php
		
        echo $front_sections['Frontwelcome'];

        echo $front_sections['Frontstory'];

        //Include the content template with shortcode.
        get_template_part( 'template-parts/content', 'frontmenu' );

        echo $front_sections['Frontholidays'];

		// Include the content template with shortcodes.
		get_template_part( 'template-parts/content', 'frontreservations' );

		// Include the blog template.
		get_template_part( 'template-parts/content', 'frontnews' );

        echo $front_sections['Frontsales'];

        echo $front_sections['Frontcontacts'];

        // Include the content template.
        get_template_part( 'template-parts/content', 'frontmap' );

      /*  echo $front_sections['Frontfooterlinks'];*/

        ?>
    </main><!-- main -->

	<?php // get_sidebar( 'content-bottom' ); ?>

</div><!-- .front-content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
