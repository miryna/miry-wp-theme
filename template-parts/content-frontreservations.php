<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage miry
 * @since miry 1.0
 */
?>

<section id="frontreservations" class="frontreservations frontbgdark" style="width: 100%; background: url('http://localhost/wp45/wp-content/uploads/2016/07/frontstory.jpg') no-repeat center center;" >
    <div class="opacityblack">
        <div class="content-width">

        <header class="entry-header textalign-center">
            <?php/* the_title( '<h2 class="">', '</h2>' ); */ ?>
            <h2>ЗАКАЗ СТОЛИКОВ</h2>
        </header><!--  -->
                    <!--
                    <div class="">
                        <form action="" >
                            <label><input type="text" name="s1" value="Сегодня"> Ваши пожелания:</label>
                            <label><input type="text" name="s1" value="Сегодня">Ваши пожелания:</label>
                            <textarea name="comment" cols="40" rows="2"></textarea>
                            <input type="submit" name="s1" value="Заказать">
                        </form>

                        Такой текст также называется как заполнитель.
                        Это очень удобный инструмент для моделей (макетов).
                        Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.
                        Такой текст также называется как заполнитель.
                        Это очень удобный инструмент для моделей (макетов).
                        Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.
                    </div> -->
 
        <?php echo do_shortcode("[redirestaurant]"); ?>

       </div><!-- .content-width -->
    </div><!-- .opacityblack -->
</section><!-- .frontreservations -->
