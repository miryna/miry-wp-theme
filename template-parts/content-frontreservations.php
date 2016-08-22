<?php
/**
 * The template used for displaying frontpage section
 *
 * @package WordPress
 * @subpackage miry
 * @since miry 1.0
 */
?>

<section id="frontreservations" class="frontreservations frontbgdark"><a id="reservation" name="reservation"></a>
    <div> <!-- class="opacityblack" -->
        <div class="content-width">

            <header class="entry-header  with-pic-separator textalign-center ">
                <h2>ЗАКАЗ СТОЛИКОВ</h2>
                <span class="pic-separator pic-darkbg"></span>
            </header>

        <?php echo do_shortcode("[redirestaurant]"); ?>

       </div><!-- .content-width -->
    </div><!-- .opacityblack -->
</section><!-- .frontreservations -->