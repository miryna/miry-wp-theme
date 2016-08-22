<?php
/**
 * The template used for displaying frontpage section
 *
 * @subpackage miry
 * @since miry 1.0
 */
?>

<section id="frontnews" class="frontnews frontbgdark"><a id="news" name="news"></a>

    <header class="entry-header textalign-center with-pic-separator">
        <h2>НОВОСТИ</h2>
        <span class="pic-separator pic-darkbg"></span>
    </header>

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

$query = new WP_Query( $args );

if ( $query->have_posts() ) {

    echo '<ul id="news-accordion" class="accordion">';

    $counter = 0;

    while ( $query->have_posts() ) {
        $counter++;
        $query->the_post();
?>
        <li class="news-item item<?php echo $counter;?> ">

            <h3>
                <div class="opacityblack hover-red">
                    <div class="news-item-head content-width">

                        <div  class="news-item-date textalign-center">
                            <?php miry_frontnews_date(); ?>
                        </div>

                        <div class="news-item-title">
                            <?php the_title( '', '' ); ?>
                        </div>

                    </div>
                </div>
            </h3>

            <div class="panel loading content-width">
                <?php the_excerpt() ?>
            </div>

        </li>
    <?php
    }

    echo '</ul>';
}

// Восстановление оригинальных данных запроса.
wp_reset_postdata();

?>

    <script type="text/javascript">
        jQuery(document).ready(function( $ ) {
        $('#news-accordion').accordion({
            canToggle: true
        });
        $(".loading").removeClass("loading");
        });

    </script>

</section><!-- .frontnews -->

<!--
           <div  class="news-item-date textalign-center">
                    <?php miry_frontnews_date(); ?>
           </div>
-->

                <?php  /*
                 // Вывод контента полностью
                 the_content();

                // Вывод ссылки 'Read more'
                 echo '<a href="' . get_permalink() . '">' . __( 'Read more', 'miry' ) . '</a>';
               */ ?>

