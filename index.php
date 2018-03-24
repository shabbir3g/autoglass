<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoglass
 */

get_header(); ?>
<div class="blogpage">
	<div class="container">
		<div class="row">
            <div class="blocs-lien blocs-liens-3cols hide-on-small-only bloc-nos-services">
			
			
			
			<?php while(have_posts()): the_post(); ?>
               <div class="col m4 l4">
                  <h2 class="title home-titles"><?php the_title(); ?></h2>
                  <div class="bloc type1 input-field-submit">
                     <a class="blocs-liens-link-img" href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail(); ?></a>
                     <div class="blocs-liens-description"><?php echo wp_trim_words(get_the_content(),28,'</div>
                     <div class="imgbtn"><a href="'.get_the_permalink().'"  class="btn-large waves-effect waves-light">Découvrir</a></div>'); ?>
                     
                  </div>
               </div>
             <?php endwhile; ?>
			   
			   
			   
			   
			   <!-- for mobile  -->
			   
			   
            <div class="hide-on-med-and-up ContratMobile">
               <div class="element" style="background:#f6f6f6 url(uploads/biblio_centrale/image/homep/services_loa_mob-min.png) no-repeat 0 0">
                  <a href="#">
                     <h2 class="title services-titles">Nos services LOA<br/>
                        et Reprise
                     </h2>
                  </a>
                  <span class="picto-services"></span>
               </div>
               <div class="element" style="background:#f6f6f6 url(uploads/biblio_centrale/image/homep/contrat_entretien_mob-min.png) no-repeat 0 0">
                    <a href="#">
                     <h2 class="title services-titles">Notre contrat<br/>
                        d&#039;entretien
                     </h2>
                  </a>
                  <span class="picto-services"></span>
               </div>
               <div class="element" style="background:#f6f6f6 url(uploads/biblio_centrale/image/homep/forfait_malins_mob.png) no-repeat 0 0">
                   <a href="#">
                     <h2 class="title services-titles">Découvrez<br/>
                        nos Forfaits Malins
                     </h2>
                  </a>
                  <span class="picto-services"></span>
               </div>
            </div>
         </div>
     </div>
</div>
</div>

<?php
get_footer();
