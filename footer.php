<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoglass
 */

?>

	 <footer class="home-footer">
         <div class="row hide-on-small-only nos-marque-bloc">
            <div class="container">
               <div class="col l12 m12 title ">
			   
			   <?php $footer_gallery_text = get_field('footer_gallery_text','options'); 
			   
				if($footer_gallery_text): ?>
			   
                  <h2 class="home-titles"><?php echo $footer_gallery_text; ?></h2>
				  
				<?php endif; ?>
				  
				  
               </div>
            </div>
            <div class="iframe-partenaires container">
			
			<?php include('iframe_partenaires.php'); ?>
			
            </div>
         </div>
         <div class="wrp container">
            <div class="footer-reparations">
             
			<?php dynamic_sidebar('footer-widget'); ?>
			
           
         </div>
		  <div class="hautFooterIframe">
			<!--<img src="<?php echo get_template_directory_uri(); ?>/images/footerrat.png" alt="" /> -->
            </div>
         </div>
         <nav role="navigation">
            <div class="container footerNav">
			
				<?php 

				wp_nav_menu(array(
					'theme_location'		=> 'footer-menu',
				));

				?>
			
           
            </div>
         </nav>
		  </footer>
		 <?php wp_footer(); ?>
     
   </body>
</html>

