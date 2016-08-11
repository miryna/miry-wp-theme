<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage miry
 * @since miry 1.0
 */
?>

<section id="frontmenu" class="frontmenu frontbgdark">

    <div class="frontmenu-header-container content-width textalign-center">
        <header class="entry-header with-pic-separator">
            <h2>МЕНЮ</h2>
            <span class="pic-separator"></span>
        </header>

        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <p class="">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

        <p class="">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>

    <div class="frontmenu-content textalign-center">

         <!--
        <h3>МЯСНЫЕ БЛЮДА</h3>
        <div class="frontmenu-row" style="overflow: hidden;">


           <div class="frontmenu-item" style="display: inline-block; width:325px; height:317px;">
               <img class="frontmenu-image" src="http://localhost/wp45/wp-content/uploads/2016/07/mrow1.jpg">
               <div class="frontmenu-text">
                   <h4>Спагетти алла карбонара</h4>
                   <p class="">Тем не менее, читатели склонны к тому, чтобы быть отвлеченными доступным контентом.</p>
                   <p>12 грн.</p>
               </div>
           </div>
           <div class="frontmenu-item" style="display: inline-block; width:325px; height:317px;">
               <img class="frontmenu-image" src="http://localhost/wp45/wp-content/uploads/2016/07/mrow2.jpg">
               <div class="frontmenu-text">
                   <h4>Спагетти алла карбонара</h4>
                   <p class="">Тем не менее, читатели склонны к тому, чтобы быть отвлеченными доступным контентом.</p>
                   <p>12 грн.</p>
               </div>
           </div>
           <div class="frontmenu-item" style="display: inline-block; width:325px; height:317px;">
               <img class="frontmenu-image" src="http://localhost/wp45/wp-content/uploads/2016/07/mrow3.jpg">
               <div class="frontmenu-text">
                   <h4>Спагетти алла карбонара</h4>
                   <p class="">Тем не менее, читатели склонны к тому, чтобы быть отвлеченными доступным контентом.</p>
                   <p>12 грн.</p>
               </div>
           </div>
           <div class="frontmenu-item" style="display: inline-block; width:325px; height:317px;">
               <img class="frontmenu-image" src="http://localhost/wp45/wp-content/uploads/2016/07/mrow4.jpg">
               <div class="frontmenu-text">
                   <h4>Спагетти алла карбонара</h4>
                   <p class="">Тем не менее, читатели склонны к тому, чтобы быть отвлеченными доступным контентом.</p>
                   <p>12 грн.</p>
               </div>
           </div>

        </div> -->

	    <?php echo do_shortcode("[wpb-latest-product title='Наши хиты']"); ?>
	    <?php echo do_shortcode('[wpb-feature-product title="Средиземноморская кухня"]'); ?>


    </div> <!--.frontmenu-content -->
	
	<?php /* do_action('slideshow_deploy', '151'); */ ?>




</section><!-- .frontmenu -->
