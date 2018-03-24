<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoglass
 */

get_header(); ?>

	<nav class="c-breadcrumb hide-on-small-only">
         <div class="container">
            <div class="row h-no-margin-horizontal-m">
               <div class="col s12 m12 l12">
                  <ul class="c-breadcrumb__list">
                     <li><a href="<?php echo home_url(); ?>" class="first" rel="up up"><?php $home_title = get_the_title( get_option('page_on_front') ); echo $home_title ; ?></a><span>></span></li>
                     <li><span class="first" rel="up"><?php wp_title(); ?></span></li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!-- CONTAINER : start -->
      <div class="container c-service-delivery__main">
         <!--  01.  D E S K T O P  -->
         <div class="c-service-delivery__desktop">
            <div class="row h-no-margin-horizontal-m">
               <div class="col s12 m12 l12">
                  <div class="c-service-delivery__desktop__container">
                     <!-- NAVIGATION -->
                     <nav class="c-service-delivery__desktop__nav">
					 
					 <?php wp_nav_menu(array(
						'theme_location'		=> 'side-menu',
					 )); ?>
					
                     </nav>
                     <div class="row pre-service-delivery__display">
                        <div class="col s12 m12 l12">
                           <div class="c-icon-title-default">
                              <i class="calc-red-icon icon-sprite"></i>
                              <h1>
                                 Pare brise - Vitrage                                    
                              </h1>
                           </div>
                        </div>
                     </div>
                     <!-- CONTENT -->
                     <section class="c-service-delivery__content" data-id="0" id="c-service-delivery__content-item-0">
                        <div class="block_devis block_devis_page">
                           <form method="post" action="https://devis.ad.fr/processForm/" id="formIdGarages">
                              <div class="links-arrow">
                                 <a href="#" id="open-modal2" style="display: none;"></a>
                                 <!-- Modal Structure -->
                                 <div class="modal-bg2"></div>
                                 <div id="modal2" class="modal carte-grise">
                                    <div class="modal-content">
                                       <span class="modal-close2 ">&#10005;</span>
                                       <br/>
                                       <div class="errorMsgTitle">
                                          Désolé, votre devis n'a pu être calculé. Veuillez réessayer ou contacter notre hotline au 01.69.79.87.91.
                                       </div>
                                    </div>
                                 </div>
                                 <a href="#" id="open-modal-avertissement" style="display: none;"></a>
                                 <!-- Modal Structure -->
                                 <div class="modal-bg-avertissement"></div>
                                 <div id="modal-avertissement" class="modal carte-grise">
                                    <div class="modal-content">
                                       <span class="modal-close-avertissement">&#10005;</span>
                                       <br/>
                                       <div class="errorMsgTitle">Veuillez remplir tous les champs afin de débuter votre demande de rendez-vous en ligne</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="block_devis_modals ">
                                 <div class="links-arrow">
                                    <!-- Modal Structure -->
                                    <div id="select_prestation_modal" class="modal">
                                       <div class="modal-content">
                                          <span class="modal-close">&#10005;</span>
                                          <div class="row">
                                             <div class="col m12">
                                                <div class="prestaSelection"><span class="nbr-prestation-selectioner">Sélectionner une Prestation</span></div>
                                             </div>
                                             <div class="col m6 s12 leftBlock">
                                                <div class="col s12 modal_titre_categ">
                                                   <div class="modalTitlePresta">Prestation avec devis immédiat en ligne</div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">COURROIE DE DISTRIBUTION</div>
                                                   <div>
                                                      <label for="test0" class="cartgris_checkbox">
                                                      <input id="test0" type="checkbox" data-codegamme="25" data-codessgamme="250101" value="Kit de distribution"/>
                                                      <i></i>
                                                      <span>Kit de distribution</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">RÉVISION VIDANGE</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="10" data-codessgamme="100101" value="Révision vidange – générale">Révision vidange – générale</option>
                                                         <option data-codegamme="10" data-codessgamme="100301" value="Révision vidange – intermédiaire">Révision vidange – intermédiaire</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">FREINAGE</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="11" data-codessgamme="110202" value="Freinage – Disques et Plaquettes AR">Freinage – Disques et Plaquettes AR</option>
                                                         <option data-codegamme="11" data-codessgamme="110201" value="Freinage – Disques et Plaquettes AV">Freinage – Disques et Plaquettes AV</option>
                                                         <option data-codegamme="11" data-codessgamme="110203" value="Freinage – Disques et Plaquettes AV/AR">Freinage – Disques et Plaquettes AV/AR</option>
                                                         <option data-codegamme="11" data-codessgamme="110102" value="Freinage – Plaquettes AR">Freinage – Plaquettes AR</option>
                                                         <option data-codegamme="11" data-codessgamme="110101" value="Freinage – Plaquettes AV">Freinage – Plaquettes AV</option>
                                                         <option data-codegamme="11" data-codessgamme="110103" value="Freinage – Plaquettes AV/AR">Freinage – Plaquettes AV/AR</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">EMBRAYAGE</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="24" data-codessgamme="240101" value="Kit d’embrayage">Kit d’embrayage</option>
                                                         <option data-codegamme="24" data-codessgamme="240201" value="Kit d&#039;embrayage et Volant moteur">Kit d&#039;embrayage et Volant moteur</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">AMORTISSEURS</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="12" data-codessgamme="120103" value="Amortisseurs AV/AR">Amortisseurs AV/AR</option>
                                                         <option data-codegamme="12" data-codessgamme="120102" value="Amortisseur AR">Amortisseur AR</option>
                                                         <option data-codegamme="12" data-codessgamme="120101" value="Amortisseur AV">Amortisseur AV</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">CLIMATISATION</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="13" data-codessgamme="130301" value="Diagnostic climatisation">Diagnostic climatisation</option>
                                                         <option data-codegamme="13" data-codessgamme="130101" value="Recharge climatisation">Recharge climatisation</option>
                                                         <option data-codegamme="13" data-codessgamme="130201" value="Révision climatisation">Révision climatisation</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">REMPLACEMENT DE FILTRE HABITACLE</div>
                                                   <div>
                                                      <label for="test1" class="cartgris_checkbox">
                                                      <input id="test1" type="checkbox" data-codegamme="19" data-codessgamme="190101" value="Remplacement filtre d&#039;habitacle"/>
                                                      <i></i>
                                                      <span>Remplacement filtre d&#039;habitacle</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">ÉCHAPPEMENT</div>
                                                   <div>
                                                      <label for="test2" class="cartgris_checkbox">
                                                      <input id="test2" type="checkbox" data-codegamme="14" data-codessgamme="140201" value="Echappement – Silencieux arrière"/>
                                                      <i></i>
                                                      <span>Echappement – Silencieux arrière</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">BATTERIE</div>
                                                   <div>
                                                      <label for="test3" class="cartgris_checkbox">
                                                      <input id="test3" type="checkbox" data-codegamme="15" data-codessgamme="150101" value="Remplacement batterie"/>
                                                      <i></i>
                                                      <span>Remplacement batterie</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">RÉNOVATION PIÈCE CARROSSERIE</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="31" data-codessgamme="310101" value="Rénovation – 1 élément carrosserie">Rénovation – 1 élément carrosserie</option>
                                                         <option data-codegamme="31" data-codessgamme="310102" value="Rénovation – 2 éléments carrosserie">Rénovation – 2 éléments carrosserie</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">RÉNOVATION PHARES</div>
                                                   <div>
                                                      <label for="test4" class="cartgris_checkbox">
                                                      <input id="test4" type="checkbox" data-codegamme="32" data-codessgamme="320102" value="Rénovation optique – 2 phares"/>
                                                      <i></i>
                                                      <span>Rénovation optique – 2 phares</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">RÉNOVATION RÉTROVISEURS</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="33" data-codessgamme="330101" value="Rénovation – 1 rétroviseur">Rénovation – 1 rétroviseur</option>
                                                         <option data-codegamme="33" data-codessgamme="330102" value="Rénovation – 2 rétroviseurs">Rénovation – 2 rétroviseurs</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">PARALLÉLISME</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="16" data-codessgamme="160101" value="Parallélisme – Géométrie train AV">Parallélisme – Géométrie train AV</option>
                                                         <option data-codegamme="16" data-codessgamme="160102" value="Parallélisme – Géométrie train AV/AR">Parallélisme – Géométrie train AV/AR</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">INJECTEURS</div>
                                                   <div>
                                                      <select class="choix-prestation browser-default">
                                                         <option value="0">Choisir</option>
                                                         <option data-codegamme="37" data-codessgamme="370101" value="Remplacement d&#039;un seul injecteur">Remplacement d&#039;un seul injecteur</option>
                                                         <option data-codegamme="37" data-codessgamme="370102" value="Remplacement de tous les injecteurs">Remplacement de tous les injecteurs</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">DIAGNOSTIC ÉLECTRONIQUE</div>
                                                   <div>
                                                      <label for="test5" class="cartgris_checkbox">
                                                      <input id="test5" type="checkbox" data-codegamme="28" data-codessgamme="280101" value="Diagnostic électronique"/>
                                                      <i></i>
                                                      <span>Diagnostic électronique</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">DIAGNOSTIC SÉCURITÉ</div>
                                                   <div>
                                                      <label for="test6" class="cartgris_checkbox">
                                                      <input id="test6" type="checkbox" data-codegamme="29" data-codessgamme="290101" value="Diagnostic sécurité"/>
                                                      <i></i>
                                                      <span>Diagnostic sécurité</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">REMPLACEMENT ET PURGE LIQUIDE DE FREIN</div>
                                                   <div>
                                                      <label for="test7" class="cartgris_checkbox">
                                                      <input id="test7" type="checkbox" data-codegamme="34" data-codessgamme="340101" value="Remplacement et purge liquide de frein"/>
                                                      <i></i>
                                                      <span>Remplacement et purge liquide de frein</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">REMPLACEMENT ET PURGE LIQUIDE DE REFROIDISSEMENT</div>
                                                   <div>
                                                      <label for="test8" class="cartgris_checkbox">
                                                      <input id="test8" type="checkbox" data-codegamme="35" data-codessgamme="350101" value="Remplacement et purge liquide de refroidissement"/>
                                                      <i></i>
                                                      <span>Remplacement et purge liquide de refroidissement</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">VANNE EGR</div>
                                                   <div>
                                                      <label for="test9" class="cartgris_checkbox">
                                                      <input id="test9" type="checkbox" data-codegamme="17" data-codessgamme="170101" value="Vanne EGR – Remplacement Vanne EGR"/>
                                                      <i></i>
                                                      <span>Vanne EGR – Remplacement Vanne EGR</span>
                                                      </label>
                                                   </div>
                                                </div>
                                                <input id="prestation_name" type="hidden" name="prestation"/>
                                             </div>
                                             <div class="col m6 s12 rightBlock">
                                                <div class="col s12">
                                                   <div class="modal_titre_categ">
                                                      <div class="modalTitlePresta">Prestations sans devis immédiat en ligne</div>
                                                   </div>
                                                   <p>Le devis sera établi par le garage que vous avez choisi pour le rendez-vous.</p>
                                                   <hr/>
                                                </div>
                                                <div class="col s12">
                                                   <div class="presta-title">JE NE CONNAIS PAS MA PRESTATION</div>
                                                   <div>
                                                      <label for="sans0" class="cartgris_checkbox">
                                                      <input id="sans0" type="checkbox" data-codegamme="50" data-codessgamme="500101" value="Prendre rendez-vous"/>
                                                      <i></i>
                                                      <span>Prendre rendez-vous</span>
                                                      </label>
                                                   </div>
                                                   <div class="presta-title">RENDEZ-VOUS SANS DEVIS</div>
                                                   <div>
                                                      <label for="sans1" class="cartgris_checkbox">
                                                      <input id="sans1" type="checkbox" data-codegamme="51" data-codessgamme="510101" value="Alternateur"/>
                                                      <i></i>
                                                      <span>Alternateur</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans2" class="cartgris_checkbox">
                                                      <input id="sans2" type="checkbox" data-codegamme="52" data-codessgamme="520101" value="Démarreur"/>
                                                      <i></i>
                                                      <span>Démarreur</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans3" class="cartgris_checkbox">
                                                      <input id="sans3" type="checkbox" data-codegamme="59" data-codessgamme="590101" value="Changement bougies de préchauffage ou d&#039;allumage"/>
                                                      <i></i>
                                                      <span>Changement bougies de préchauffage ou d&#039;allumage</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans4" class="cartgris_checkbox">
                                                      <input id="sans4" type="checkbox" data-codegamme="63" data-codessgamme="630101" value="Remplacement injecteur"/>
                                                      <i></i>
                                                      <span>Remplacement injecteur</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans5" class="cartgris_checkbox">
                                                      <input id="sans5" type="checkbox" data-codegamme="53" data-codessgamme="530101" value="Triangle de suspensions"/>
                                                      <i></i>
                                                      <span>Triangle de suspensions</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans6" class="cartgris_checkbox">
                                                      <input id="sans6" type="checkbox" data-codegamme="75" data-codessgamme="750101" value="Rotule direction ou suspension"/>
                                                      <i></i>
                                                      <span>Rotule direction ou suspension</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans7" class="cartgris_checkbox">
                                                      <input id="sans7" type="checkbox" data-codegamme="54" data-codessgamme="540101" value="Biellette"/>
                                                      <i></i>
                                                      <span>Biellette</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans8" class="cartgris_checkbox">
                                                      <input id="sans8" type="checkbox" data-codegamme="55" data-codessgamme="550101" value="Cardan ou soufflet de cardan"/>
                                                      <i></i>
                                                      <span>Cardan ou soufflet de cardan</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans9" class="cartgris_checkbox">
                                                      <input id="sans9" type="checkbox" data-codegamme="56" data-codessgamme="560101" value="Courroie accessoires"/>
                                                      <i></i>
                                                      <span>Courroie accessoires</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans10" class="cartgris_checkbox">
                                                      <input id="sans10" type="checkbox" data-codegamme="58" data-codessgamme="580101" value="Roulement"/>
                                                      <i></i>
                                                      <span>Roulement</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans11" class="cartgris_checkbox">
                                                      <input id="sans11" type="checkbox" data-codegamme="60" data-codessgamme="600101" value="Remplacement optique phare/feu"/>
                                                      <i></i>
                                                      <span>Remplacement optique phare/feu</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans12" class="cartgris_checkbox">
                                                      <input id="sans12" type="checkbox" data-codegamme="61" data-codessgamme="610101" value="Remplacement ampoule"/>
                                                      <i></i>
                                                      <span>Remplacement ampoule</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans13" class="cartgris_checkbox">
                                                      <input id="sans13" type="checkbox" data-codegamme="65" data-codessgamme="650101" value="Remplacement thermostat ou calorstat"/>
                                                      <i></i>
                                                      <span>Remplacement thermostat ou calorstat</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans14" class="cartgris_checkbox">
                                                      <input id="sans14" type="checkbox" data-codegamme="66" data-codessgamme="660101" value="Remplacement mâchoire ou tambours arrière"/>
                                                      <i></i>
                                                      <span>Remplacement mâchoire ou tambours arrière</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans15" class="cartgris_checkbox">
                                                      <input id="sans15" type="checkbox" data-codegamme="67" data-codessgamme="670101" value="Ventilateur"/>
                                                      <i></i>
                                                      <span>Ventilateur</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans16" class="cartgris_checkbox">
                                                      <input id="sans16" type="checkbox" data-codegamme="70" data-codessgamme="700101" value="Contrôle circuit de charge"/>
                                                      <i></i>
                                                      <span>Contrôle circuit de charge</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans17" class="cartgris_checkbox">
                                                      <input id="sans17" type="checkbox" data-codegamme="71" data-codessgamme="710101" value="Traitement anti bactérien du circuit de climatisation"/>
                                                      <i></i>
                                                      <span>Traitement anti bactérien du circuit de climatisation</span>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <label for="sans18" class="cartgris_checkbox">
                                                      <input id="sans18" type="checkbox" data-codegamme="72" data-codessgamme="720101" value="Remplacement filtre d&#039;habitacle"/>
                                                      <i></i>
                                                      <span>Remplacement filtre d&#039;habitacle</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Modal Structure -->
                                    <div id="cartgris_modal" class="modal">
                                       <div class="modal-content">
                                          <span class="modal-close">&#10005;</span>
                                          <div class="row">
                                             <div class="col m12">
                                                <div class="modalTitlePresta">Identifiez votre véhicule avec votre carte grise</div>
                                             </div>
                                             <div class="row typemin_modal carte_warning_input">
                                                <div class="col s12 m6 l4">
                                                   <span>TYPE MINE</span>
                                                   <label for="">Suite de chiffres et lettres (longueur variable) *</label>
                                                   <input type="text" name="rechercheImmatriculation[mine2]" id="input-field-mine2" placeholder="Exemple : 5414AB377" value=""/>
                                                   <span class="carte_warning">Pas de résultat avec ces indications</span>
                                                </div>
                                                <div class="col s12 m6 l4">
                                                   <span>DATE 1ère MISE EN CIRCULATION</span>
                                                   <label for="">Au format JJ/MM/AAAA</label>
                                                   <input type="text" name="rechercheImmatriculation[date_immat]" id="input-field-first-immat" placeholder="Exemple : 18/10/2009" value=""/>
                                                </div>
                                                <div class="col s12 m12 l4">
                                                   <a class="btn-large waves-effect waves-light" id="btn-large-carte">OK</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row cartgris_result">
                                             <div class="col s12">
                                                <span class="nb_result">1 Result</span>
                                                <div class="row catrgris_result">
                                                   <div class="col m12 s12 l9">
                                                      <p>Opel Kadett 1.2 GT - 5 portes Berline Lorem ipsum </p>
                                                   </div>
                                                   <div class="col m12 s12 l3 btn_container">
                                                      <a class="btn-large waves-effect waves-light">Sélectionner</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row blockImage_cartgris">
                                             <div class="col m6 s12">
                                                <label for="">Avant 2014</label>
                                                <img src="images/refonte/cartgris.png" alt="">
                                             </div>
                                             <div class="col m6 s12">
                                                <label for="">Apres 2014</label>
                                                <img src="images/refonte/cartgris2.png" alt="">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <p>
                                                <span>* A propos du TYPE MINE (Code national d'identification du type - CNIT - depuis 1995)</span>
                                                Si la carte grise de votre véhicule a été émise avant 2004 il est noté dans la zone «
                                                TYPE »
                                                Si la carte grise de votre véhicule a été émise après 2004 il est noté dans la zone «
                                                (D.2.1) »
                                                <span>Attention le type mine exact est parfois précédé des lettres correspondant à la marque du véhicule, qu'il ne faut pas indiquer ici..</span>
                                                Exemple pour une Renault :
                                                MRE5414AB377 (MRE = Marque Renault)
                                                <span>Le type mine est donc 5414AB377</span>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="btn_container_vd">
                                 <div class="row btn-valider_container">
                                    <div class="btn-valider">
                                       <a class="btn-large waves-effect waves-light">Valider</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="container">
                                    <div class="block_devis_content block_devis_content_page">
                                       <input type="hidden" id="urlretour" name="urlretour" value=""/>
                                       <!--                         <a href="#" id="close-menu-banner" class="hide-on-med-and-down">Fermer</a>
                                          -->                    
                                       <h1 hidden>RÉPARATION AUTO <span>MULTI-MARQUES</span></h1>
                                       <h2 class="devis-bloc-title">Trouvez la prestation qui vous convient pour l'entretien de votre voiture</h2>
                                       <div class="row">
                                          <div class="col s12 m3">
                                             <div><span class="bloc-devis-text">Choisissez votre prestation</span></div>
                                             <div class="input-field">
                                                <div id="select_prestation" class="select_prestation">
                                                   <span class="select_prestation_text">Choisir</span>
                                                   <span class="picto_tria"></span>
                                                </div>
                                                <input type="hidden" id="prestation-choix" name="rechercheImmatriculation[prestation-choix]" value="">
                                                <input type="hidden" id="detail-prestation" name="rechercheImmatriculation[detail-prestation]" value="">
                                                <input type="hidden" id="type_ident" name="rechercheImmatriculation[type_ident]" value="">
                                             </div>
                                          </div>
                                          <div class="col s12 m3 bloc_immatri">
                                             <div>
                                                <label for="immat_radio" class="radiobox">
                                                <input id="immat_radio" type="radio" name="min_immat" checked>
                                                <i></i>
                                                <span>Immatriculation</span>
                                                </label>
                                                <label for="cartgris_radio" class="radiobox">
                                                <input id="cartgris_radio" type="radio" name="min_immat">
                                                <i></i>
                                                <span>Carte grise</span>
                                                </label>
                                                <label for="modele_radio" class="radiobox" style="display: none">
                                                <input id="modele_radio" type="radio" name="min_immat">
                                                <i></i>
                                                <span>Modèle</span>
                                                </label>
                                             </div>
                                             <div class="input-field input-field-euro" id="devis-immatriculation">
                                                <input type="text" id="input-field-2" name="rechercheImmatriculation[immatriculation]" value="" placeholder="ex : AB322CA"/>
                                                <input type="text" name="rechercheImmatriculation[type_mine]" id="input-field-type_mine" placeholder="Saisissez le type «mine»" class="hide" value=""/>
                                             </div>
                                          </div>
                                          <div class="col s12 m3 lieu-col">
                                             <div><span class="bloc-devis-text">Indiquez un lieu</span></div>
                                             <div class="input-field">
                                                <input id="input-field-3-data" type="text" value="" placeholder="" style="display:none" class="numeric">
                                                <input type="text" id="input-field-3" value="" name="rechercheImmatriculation[code_postal]" placeholder="CP" autocomplete="off" class="numeric"/>
                                                <!-- <input id="code-postal" type="text" value="" class="code-postal form-text required validate" placeholder="Recherche garage (Code postal, ville)" autocomplete="off"> -->
                                             </div>
                                          </div>
                                          <div class="col s12 m3 btn-price">
                                             <div class="input-field input-field-submit">
                                                <input type="hidden" name="rechercheImmatriculation[code_postale_submitted]" id="code_postale_place" value="">
                                                <input type="hidden" name="rechercheImmatriculation[ville]" id="ville_place" value="">
                                                <input type="hidden" name="formname" value="rechercheImmatriculation">
                                                <a class="btn-large waves-effect waves-light" id="btn-large-imm" onclick="dataLayer.push({'Event': 'menuHp', 'nomLien': 'calculez-le-devis'});">Voir Les Prix Proposés</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        
                        <div class="row">
                           <div class="col s12 m12 l12">
						   
						   <div class="c-service-delivery__display">
						   <?php while(have_posts()): the_post(); ?>
						   <?php the_content(); ?>
						   <?php endwhile; ?>
						  </div>  
                             <!-- <div class="c-service-delivery__display">
                                 <p>
                                    <span style="color: rgb(3, 44, 116); font-weight: bold;">A QUOI &Ccedil;A SERT ? COMMENT CELA FONCTIONNE ?&nbsp;</span>
                                 </p>
                                 <p>
                                    En plus&nbsp;de prot&eacute;ger les occupants du vent, le pare-brise est essentiel pour la rigidit&eacute; du v&eacute;hicule. Sa fragilisation diminue globalement la s&eacute;curit&eacute; du v&eacute;hicule en r&eacute;duisant la visibilit&eacute; du conducteur et la protection des passagers en cas de collision.
                                 </p>
                                 <p style="text-align: left">
                                    <img alt="" src="uploads/1/image/Pare-brise_1.jpg" style="width: 391px; height: 219px"/><br/>
                                    <br/>
                                    (Source illustration D.R.) L&eacute;gende&nbsp; : coupe d&rsquo;un pare brise.
                                 </p>
                                 <p>
                                    Il peut arriver qu&rsquo;un gravillon heurte la couche ext&eacute;rieure du pare-brise. Ce choc se traduit dans le meilleur des cas, par un impact en forme de bulle &eacute;toil&eacute;e (r&eacute;parable si de faible dimension) ou au pire, par une&nbsp; fissure.
                                 </p>
                                 <table border="0" cellpadding="2" cellspacing="2" style="width: 100%">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <img alt="" src="uploads/1/image/Pare-brise_2.jpg" style="width: 207px; height: 207px"/>
                                          </td>
                                          <td>
                                             <img alt="" src="uploads/1/image/Pare-brise_3.jpg" style="width: 226px; height: 207px"/>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <p>
                                    (Source Illustration ETAI)
                                 </p>
                                 <p>
                                    <br/>
                                    L&eacute;gende&nbsp;&nbsp; : Un impact non r&eacute;par&eacute; peut s&rsquo;aggraver par des fissures obligeant le remplacement du pare-brise.
                                 </p>
                                 <p>
                                    <br/>
                                    <span style="font-weight: bold; color: #032c74">LES SYMPTOMES QUI VOUS ALERTENT ?</span><br/>
                                    - Un impact en forme de bulle ou d&rsquo;&eacute;toile visible sur le pare-brise.<br/>
                                    - Une fissure sur le pare-brise.<br/>
                                    - Une entr&eacute;e d&rsquo;eau d&eacute;tect&eacute;e &agrave; l&rsquo;int&eacute;rieur de l&rsquo;habitacle.<br/>
                                    - Des rayures, des reflets ou perte de translucidit&eacute;.
                                 </p>
                                 <p>
                                    <br/>
                                    <span style="font-weight: bold; color: #032c74">L&rsquo;AVIS DES PROS</span><br/>
                                    - Ne tardez pas &agrave; faire r&eacute;parer l&rsquo;impact sous peine qu&rsquo;il ne s&rsquo;agrandisse. Une r&eacute;paration de pare brise&nbsp; effectu&eacute;e &agrave; temps peut vous &eacute;viter son remplacement total.
                                 </p>
                                 <p>
                                    - En attendant la r&eacute;paration d&rsquo;un impact :<br/>
                                    o Apposer une pastille de protection sur l&rsquo;impact qui le prot&eacute;gera de la pollution et des souillures en attendant la r&eacute;paration.<br/>
                                    o Franchir les trottoirs et les ralentisseurs avec pr&eacute;caution.<br/>
                                    o Eviter autant que possible les nids de poule et autres reliefs de la route.<br/>
                                    o Eviter les chocs thermiques en ajustant par palier la temp&eacute;rature int&eacute;rieure air (chaud ou froid).<br/>
                                    <br/>
                                    <strong>Les risques encourus</strong><br/>
                                    - Obligation du remplacement du pare-brise si l&rsquo;impact se transforme en fissure,<br/>
                                    - Une contre-visite au contr&ocirc;le technique apr&egrave;s r&eacute;paration, si la fissure mesure plus de 30 cm (m&ecirc;me si la fissure n&rsquo;est pas dans le champ de vision du conducteur),D&eacute;gradation du confort visuel,<br/>
                                    - Une usure pr&eacute;matur&eacute;e du (des)&nbsp; balai(s) d&rsquo;essuie-glace<br/>
                                    <br/>
                                    <span style="font-weight: bold; color: #032c74">A RETENIR / A SAVOIR</span><br/>
                                    La r&eacute;paration d&rsquo;un impact est gratuite* chez votre Carrossier AD. Si l&rsquo;impact est dans le champ de vision, la r&eacute;paration est interdite, le remplacement du pare-brise est obligatoire.<br/>
                                    <br/>
                                    Remplacez les balais d&rsquo;essuie-glace lorsque le pare-brise est neuf.
                                 </p>
                                 <p>
                                    Remplacez syst&eacute;matiquement les balais d&rsquo;essuie-glace lorsqu&rsquo;ils sont us&eacute;s sous peine de rayer irr&eacute;m&eacute;diablement le pare-brise.
                                 </p>
                                 <p>
                                    <em>*Sous r&eacute;serve d&rsquo;&ecirc;tre assur&eacute; &laquo; bris de glace &raquo; sans application de franchise dans les carrosseries agr&eacute;&eacute;es par votre assureur.</em>
                                 </p>
                                 <p>
                                    &nbsp;
                                 </p>
                              </div> -->
							  
							  
							  
							  
                           </div>
                        </div>
                     </section>
					 
					 
					 
					 
					 
					 
					 

                     
                  </div>
               </div>
            </div>
         </div>
         <!--  02.  T A B L E T  -->
         <div class="c-service-delivery__tablet">
            <div class="row h-no-margin-horizontal-m">
               <div class="col s12 m12 l12">
                  <div class="c-service-delivery__tablet__container">
                     <!-- Title -->
                     <div class="c-title-group">
                        <h2>   Carrosserie</h2>
                     </div>
                     <!-- ACORDION -->
                     <ul class="collapsible" data-collapsible="accordion">
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header ">
                              <a href="prestations-carrosserie-rapide.html">
                              Prestations carrosserie rapide                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                        </li>
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header active">
                              <a href="pare-brise-vitrage.html">
                              Pare brise - Vitrage                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                           <div class="collapsible-body">
                              <section class="c-service-delivery__content" data-id="1" id="c-service-delivery__content-item-1" style="display: block">
                                 <div class="row">
                                    <div class="col s12 m12 l12">
                                       <div class="c-icon-title-default">
                                          <i class="calc-red-icon icon-sprite"></i>
                                          <h3>
                                             Pare brise - Vitrage        
                                          </h3>
                                       </div>
                                       <div class="c-service-delivery__display">
                                          <p>
                                             <span style="color: rgb(3, 44, 116); font-weight: bold;">A QUOI &Ccedil;A SERT ? COMMENT CELA FONCTIONNE ?&nbsp;</span>
                                          </p>
                                          <p>
                                             En plus&nbsp;de prot&eacute;ger les occupants du vent, le pare-brise est essentiel pour la rigidit&eacute; du v&eacute;hicule. Sa fragilisation diminue globalement la s&eacute;curit&eacute; du v&eacute;hicule en r&eacute;duisant la visibilit&eacute; du conducteur et la protection des passagers en cas de collision.
                                          </p>
                                          <p style="text-align: left">
                                             <img alt="" src="uploads/1/image/Pare-brise_1.jpg" style="width: 391px; height: 219px"/><br/>
                                             <br/>
                                             (Source illustration D.R.) L&eacute;gende&nbsp; : coupe d&rsquo;un pare brise.
                                          </p>
                                          <p>
                                             Il peut arriver qu&rsquo;un gravillon heurte la couche ext&eacute;rieure du pare-brise. Ce choc se traduit dans le meilleur des cas, par un impact en forme de bulle &eacute;toil&eacute;e (r&eacute;parable si de faible dimension) ou au pire, par une&nbsp; fissure.
                                          </p>
                                          <table border="0" cellpadding="2" cellspacing="2" style="width: 100%">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <img alt="" src="uploads/1/image/Pare-brise_2.jpg" style="width: 207px; height: 207px"/>
                                                   </td>
                                                   <td>
                                                      <img alt="" src="uploads/1/image/Pare-brise_3.jpg" style="width: 226px; height: 207px"/>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <p>
                                             (Source Illustration ETAI)
                                          </p>
                                          <p>
                                             <br/>
                                             L&eacute;gende&nbsp;&nbsp; : Un impact non r&eacute;par&eacute; peut s&rsquo;aggraver par des fissures obligeant le remplacement du pare-brise.
                                          </p>
                                          <p>
                                             <br/>
                                             <span style="font-weight: bold; color: #032c74">LES SYMPTOMES QUI VOUS ALERTENT ?</span><br/>
                                             - Un impact en forme de bulle ou d&rsquo;&eacute;toile visible sur le pare-brise.<br/>
                                             - Une fissure sur le pare-brise.<br/>
                                             - Une entr&eacute;e d&rsquo;eau d&eacute;tect&eacute;e &agrave; l&rsquo;int&eacute;rieur de l&rsquo;habitacle.<br/>
                                             - Des rayures, des reflets ou perte de translucidit&eacute;.
                                          </p>
                                          <p>
                                             <br/>
                                             <span style="font-weight: bold; color: #032c74">L&rsquo;AVIS DES PROS</span><br/>
                                             - Ne tardez pas &agrave; faire r&eacute;parer l&rsquo;impact sous peine qu&rsquo;il ne s&rsquo;agrandisse. Une r&eacute;paration de pare brise&nbsp; effectu&eacute;e &agrave; temps peut vous &eacute;viter son remplacement total.
                                          </p>
                                          <p>
                                             - En attendant la r&eacute;paration d&rsquo;un impact :<br/>
                                             o Apposer une pastille de protection sur l&rsquo;impact qui le prot&eacute;gera de la pollution et des souillures en attendant la r&eacute;paration.<br/>
                                             o Franchir les trottoirs et les ralentisseurs avec pr&eacute;caution.<br/>
                                             o Eviter autant que possible les nids de poule et autres reliefs de la route.<br/>
                                             o Eviter les chocs thermiques en ajustant par palier la temp&eacute;rature int&eacute;rieure air (chaud ou froid).<br/>
                                             <br/>
                                             <strong>Les risques encourus</strong><br/>
                                             - Obligation du remplacement du pare-brise si l&rsquo;impact se transforme en fissure,<br/>
                                             - Une contre-visite au contr&ocirc;le technique apr&egrave;s r&eacute;paration, si la fissure mesure plus de 30 cm (m&ecirc;me si la fissure n&rsquo;est pas dans le champ de vision du conducteur),D&eacute;gradation du confort visuel,<br/>
                                             - Une usure pr&eacute;matur&eacute;e du (des)&nbsp; balai(s) d&rsquo;essuie-glace<br/>
                                             <br/>
                                             <span style="font-weight: bold; color: #032c74">A RETENIR / A SAVOIR</span><br/>
                                             La r&eacute;paration d&rsquo;un impact est gratuite* chez votre Carrossier AD. Si l&rsquo;impact est dans le champ de vision, la r&eacute;paration est interdite, le remplacement du pare-brise est obligatoire.<br/>
                                             <br/>
                                             Remplacez les balais d&rsquo;essuie-glace lorsque le pare-brise est neuf.
                                          </p>
                                          <p>
                                             Remplacez syst&eacute;matiquement les balais d&rsquo;essuie-glace lorsqu&rsquo;ils sont us&eacute;s sous peine de rayer irr&eacute;m&eacute;diablement le pare-brise.
                                          </p>
                                          <p>
                                             <em>*Sous r&eacute;serve d&rsquo;&ecirc;tre assur&eacute; &laquo; bris de glace &raquo; sans application de franchise dans les carrosseries agr&eacute;&eacute;es par votre assureur.</em>
                                          </p>
                                          <p>
                                             &nbsp;
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </li>
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header ">
                              <a href="climatisation.html">
                              Climatisation                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                        </li>
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header ">
                              <a href="renovation-optique.html">
                              Rénovation Optique                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                        </li>
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header ">
                              <a href="reparation-renovation-plastique.html">
                              Réparation &amp; rénovation plastique                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                        </li>
                        <li>
                           <!-- Nav -->
                           <div class="collapsible-header ">
                              <a href="reparation-carrosserie.html">
                              Réparation carrosserie                                        </a>
                              <i class="collapsible-icon-open">+</i>
                              <i class="collapsible-icon-close">-</i>
                              <i class="collapsible-icon-arrow"></i>
                           </div>
                           <!-- Content -->
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div id="block-links" class="hide-on-med-and-up">
         <div class="container">
            <div class="row">
               <div class="col s12 m3 title">
                  <h2 class="title home-titles">Les engagements <span class="breakline">du réseau AD Garages</span></h2>
               </div>
               <div class="col s12 m9">
                  <div class="col s12 m6">
                     <div>
                        <div>
                           <a href="../transparence-des-prix.html" class="link-xl-mob-prix">Transparence des prix</a>
                           <a href="../transparence-des-prix.html" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                     <div>
                        <div>
                           <a href="../garantie-constructeur-preservee.html" class="link-xl-mob-garantie">Garantie constructeur préservée</a>
                           <a href="../garantie-constructeur-preservee.html" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m6">
                     <div>
                        <div>
                           <a href="../prestations-techniques-multimarques.html" class="link-xl-mob-presta">Prestations techniques multimarques</a>
                           <a href="../prestations-techniques-multimarques.html" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                     <div>
                        <div>
                           <a href="../devis-et-rdv-en-ligne.html" class="link-xl-mob-devis">Devis et RDV en ligne immédiat 24h/24</a>
                           <a href="../devis-et-rdv-en-ligne.html" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php
get_sidebar();
get_footer();
