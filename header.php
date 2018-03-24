<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoglass
 */

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
  </head>
   <body <?php body_class(); ?> >
   
    <?php $header_top_text = get_field('header_top_text','options'); 
					if($header_top_text): ?>
   
      <div id="cookie_notice" data-chemin=".ad.fr">
         <div class="container">
            <div class="row">
               <div class="col s12">
			   
			  
                <p><?php echo $header_top_text; ?></p>
				
				  
				  <?php $header_top_link = get_field('header_top_link','options'); 
					if($header_top_link): ?>
   
                  <a href="<?php echo $header_top_link['url']; ?>" title="En savoir plus"><?php echo $header_top_link['title']; ?></a>
				  <?php endif; ?>  
				  
                  <a class="closer" title="ok">ok</a>
				  
				  
				  
               </div>
            </div>
         </div>
      </div>
	  <?php endif; ?>  
	  
	  <?php $header_right_logo = get_field('header_right_logo','options'); 
			if($header_right_logo): ?>
	 <div class="right-logo"> 
	 
	 
		<img src="<?php echo get_template_directory_uri(); ?>/images/refonte/logo/corner_widget_top_right.png" alt="" />
		
   
		 <img src="<?php echo $header_right_logo['url']; ?>" alt="<?php echo $header_right_logo['title']; ?>" />
		
		 <?php $header_right_text = get_field('header_right_text','options'); 
		if($header_right_text): ?>
		 <div class="textl-right" style=""><?php echo $header_right_text; ?></div>
		  <?php endif; ?>
		  
	 </div>
	  <?php endif; ?>  
      <nav id="index-header" class="white" role="heading">
	  
		<?php $logo_upload = get_field('logo_upload','options'); 
		 ?>
         <div class="nav-wrapper container" style="background-image:url('<?php echo $logo_upload['url']; ?>');">
		 
		  
		   <?php $logo_text = get_field('logo_text','options'); 
		if($logo_text): ?>
            <a href="<?php echo home_url(); ?>" class="brand-logo" alt="<?php echo $logo_text; ?>">
            <span><?php echo $logo_text; ?></span>
            </a>
			<?php endif; ?>   
			
            <div class="links">
               <ul class="nav-header">
				<?php $our_location_link = get_field('our_location_link','options'); 
				if($our_location_link): ?>
                  <li class="mobilite-1024"><a href="<?php echo $our_location_link['url']; ?>" class="link-s-garage-b"><span><?php echo $our_location_link['title']; ?></span></a></li>
				<?php endif; ?>
				  <?php $our_contact_link = get_field('our_contact_link','options'); 
				if($our_contact_link): ?>
                  <li class="mobilite-1024"><a href="<?php echo $our_contact_link['url']; ?>" class="link-s-contact-b"><span><?php echo $our_contact_link['title']; ?></span></a></li>
				  <?php endif; ?>
               </ul>
            </div>
            <div class="form-search">
               <div>
                  <input id="code-postal-data" type="text" class="numeric" value="" placeholder="" style="display:none">
                  <input id="code-postal" type="text" value="" class="code-postal form-text required validate numeric" placeholder="Recherche garage (Code postal)" autocomplete="off">
                  <div class="loupe-container">
                     <span class="hide-on-med-and-up">garage</span>
                     <a href="reparateur-auto.html" id="pictoSearchGarage" class="link-xl-loupe-b">Rechercher</a>
                     <input id="ville-place_id-header" type="hidden" value=""/>
                  </div>
               </div>
            </div>
            <div class="menu-lateral">
               <a href="#" data-activates="nav-mobile" class="button-collapse button-menu">Menu</a>
            </div>
            <ul id="nav-mobile" class="side-nav collapsible">
               <li class="entete">
                  <a href="<?php echo home_url(); ?>" class="button-menu"><img src="<?php echo $logo_upload['url']; ?>" alt="" class="logo"/></a>
                  <img src="images/refonte/__pictos/close.png" id="close-menu" alt=""/>
               </li>
               <!-- <li class="nav-1"><a href="contact.html" class="link-s-contact-b">Nous contacter</a></li>
               <li class="nav-1"><a href="reparateur-auto.html">Trouver un garage</a></li>
               <li class="nav-3">
                  <div class="collapsible-header"><a href="#">Réparation mécanique</a></div>
                  <div class="collapsible-body">
                     <ul>
                        <li><a class="link-s-moteur" href="#" >Allumage et gestion moteur</a></li>
                        <li><a class="link-s-pneumatique" href="#" >Pneumatiques</a></li>
                        <li><a class="link-s-" href="#" >Entretien Auto - Révision Vidange </a></li>
                        <li><a class="link-s-" href="#" >Freinage - Disques &amp; Plaquettes</a></li>
                        <li><a class="link-s-" href="#" >Courroie de Distribution</a></li>
                        <li><a class="link-s-electronique" href="#" >Diagnostic électronique</a></li>
                        <li><a class="link-s-echappement" href="#" >Echappement</a></li>
                        <li><a class="link-s-amortisseur" href="#" >Amortisseurs</a></li>
                        <li><a class="link-s-embrayage" href="#" >Embrayage</a></li>
                        <li><a class="link-s-batterie" href="#" >Batterie - Alternateur - Démarreur</a></li>
                     </ul>
                  </div>
               </li>
               <li class="nav-3">
                  <div class="collapsible-header"><a href="#">Réparation carrosserie</a></div>
                  <div class="collapsible-body">
                     <ul>
                        <li><a class="link-s-reparation-carrosserie-rapide" href="#" >Prestations carrosserie rapide</a></li>
                        <li><a class="link-s-pare-brise-vitrage" href="#" >Pare brise - Vitrage</a></li>
                        <li><a class="link-s-climatisation"href="#" >Climatisation</a></li>
                        <li><a class="link-s-optique" href="#" >Rénovation Optique</a></li>
                        <li><a class="link-s-renovation-plastique" href="#" >Réparation &amp; rénovation plastique</a></li>
                        <li><a class="link-s-reparation-carrosserie" href="#" >Réparation carrosserie</a></li>
                     </ul>
                  </div>
               </li>
               <li class="nav-3">
                  <div class="collapsible-header"><a href="#">Ventes Véhicules</a></div>
                  <div class="collapsible-body">
                     <ul>
                        <li><a class="link-s-particuliers" href="#">Véhicules Particuliers</a></li>
                        <li><a class="link-s-utilitaires" href="#" >Véhicules Utilitaires</a></li>
                        <li><a class="link-s-reprises" href="#" >Reprise Cash</a></li>
                        <li><a class="link-s-occasions" href="#" >Occasions</a></li>
                     </ul>
                  </div>
               </li> -->
			    <?php wp_nav_menu(array(
		'theme_location'		=> 'main-menu',
		'menu_class'		=> 'nav-main collapsible',
	  )); ?>
            </ul>
         </div>
      </nav>
      
	  <div id="index-nav">
         <div class="container">
            <nav role="navigation">
	  <?php wp_nav_menu(array(
		'theme_location'		=> 'main-menu',
		'menu_class'		=> 'nav-main collapsible',
	  )); ?>
			</nav>
		</div>
	  </div>
	  <!--
      <div id="index-nav">
         <div class="container">
            <nav role="navigation">
               <ul class="nav-main collapsible">
                  <li class="nav-rep-mecanique">
                     <div class="collapsible-header">Réparation mécanique</div>
                     <div class="collapsible-body">
                        <div class="container links-2cols arrow">
                           <div class="row">
                              <ul class="_2cols">
                                 <li><a class="link-s-moteur" href="#" >Allumage et gestion moteur</a></li>
                                 <li><a class="link-s-pneumatique" href="#" >Pneumatiques</a></li>
                                 <li><a class="link-s-" href="#" >Entretien Auto - Révision Vidange </a></li>
                                 <li><a class="link-s-" href="#" >Freinage - Disques &amp; Plaquettes</a></li>
                                 <li><a class="link-s-" href="#" >Courroie de Distribution</a></li>
                                 <li><a class="link-s-electronique" href="#" >Diagnostic électronique</a></li>
                              </ul>
                              <ul class="_2cols">
                                 <li><a class="link-s-echappement" href="#" >Echappement</a></li>
                                 <li><a class="link-s-amortisseur" href="#" >Amortisseurs</a></li>
                                 <li><a class="link-s-embrayage" href="#" >Embrayage</a></li>
                                 <li><a class="link-s-batterie" href="#" >Batterie - Alternateur - Démarreur</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-rep-carrosserie">
                     <div class="collapsible-header">Réparation carrosserie</div>
                     <div class="collapsible-body">
                        <div class="container links-1col arrow">
                           <div class="row">
                              <ul>
                                 <li><a class="link-s-reparation-carrosserie-rapide" href="#" >Prestations carrosserie rapide</a></li>
                                 <li><a class="link-s-pare-brise-vitrage" href="#" >Pare brise - Vitrage</a></li>
                                 <li><a class="link-s-climatisation" href="#" >Climatisation</a></li>
                                 <li><a class="link-s-optique" href="#" >Rénovation Optique</a></li>
                                 <li><a class="link-s-renovation-plastique" href="#" >Réparation &amp; rénovation plastique</a></li>
                                 <li><a class="link-s-reparation-carrosserie"href="#" >Réparation carrosserie</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-vehicules-national">
                     <div class="collapsible-header">Ventes Véhicules</div>
                     <div class="collapsible-body">
                        <div class="container links-1col arrow">
                           <div class="row">
                              <ul class="links">
                                 <li><a class="link-s-particuliers" href="#" >Véhicules Particuliers</a></li>
                                 <li><a class="link-s-utilitaires" href="#" >Véhicules Utilitaires</a></li>
                                 <li><a class="link-s-reprises"href="#" >Reprise Cash</a></li>
                                 <li><a class="link-s-occasions" href="#" >Occasions</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
	  
-->