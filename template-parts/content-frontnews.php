<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage miry
 * @since miry 1.0
 */
?>



<section id="frontnews" class="frontnews frontbgdark">


    <header class="entry-header textalign-center with-pic-separator">
        <h2>НОВОСТИ</h2>
        <span class="pic-separator pic-darkbg"></span>
    </header>

<!---->
<?php


$args = array(
    'category_name' => 'news',
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
    'nopaging' => true
);

// Собственный запрос.
$query = new WP_Query( $args );

// Проверка на наличие результата.
if ( $query->have_posts() ) {

    echo '<ul  id="news-accordion" class="accordion">';

    // Прохождение по результатам в цикле.
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>

        <li <?php post_class( 'news-item item1' ); ?>>
            <?php the_title( '<h3 class="opacityblack hover-red"><div class="content-width">', '</div></h3>' ); ?>

            <div class="panel loading">
                <?php   the_content(); ?>
            </div>
        </li>
    <?php
    }

    echo '</ul>';
}

// Восстановление оригинальных данных запроса.
wp_reset_postdata();


?>
<!---->

<!---->

    <script type="text/javascript">
        jQuery(document).ready(function( $ ) {
        $('#news-accordion').accordion({
            canToggle: true
        });
        $(".loading").removeClass("loading");
        });

    </script>

<!---->



</section><!-- .frontnews -->