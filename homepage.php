<?php  
/*
Template Name: Home Page
*/
get_header(); ?>


      <div class="block_devis">
         <ul class="blockDevisSlider">
		 
		 <?php $slider_image = get_field('slider_image'); 

			if($slider_image):

			foreach($slider_image as $slider): ?>
            <li>
               <a class="blokDevisUrl" href="<?php echo $slider['slide_link']['url']; ?>"></a>
               <div>
                  <img src="<?php echo $slider['slide_image']['url']; ?>" alt="<?php echo $slider['slide_image']['title']; ?>"/>
               </div>
            </li>
			
			<?php endforeach; endif; ?>
            
         </ul>
         <div class="tabs-blockdevis">
            <div class="container">
               <ul class="nav-tabs-blockdevis">
                  <li>
                     <a data-tab="multi-mark-form" class="tab-active">
                        <h1>RÉPARATION AUTO MULTI-MARQUES</h1>
                     </a>
                  </li>
                  <li>
                     <a data-tab="pneu-from-tb">
                        <h1>ACHAT ET POSE DE PNEUS</h1>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="row dvs-container dvs-active-tab" id="multi-mark-form">
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
                  <div class="block_devis_modals">
                     <div class="links-arrow">
                        <!-- Modal Structure -->
                        <div id="select_prestation_modal" class="modal">
                           <div class="modal-content">
                              <span class="modal-close">&#10005;</span>
                              <div class="row">
                                 <div class="col m12">
                                    <div class="prestaSelection"><span class="nbr-prestation-selectioner">0</span> Prestation sélectionnée</div>
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
                                       <div>RENDEZ-VOUS SANS DEVIS</div>
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
                                    <img src="<?php echo get_template_directory_uri();  ?>/images/refonte/cartgris.png" alt="">
                                 </div>
                                 <div class="col m6 s12">
                                    <label for="">Apres 2014</label>
                                    <img src="<?php echo get_template_directory_uri();  ?>/images/refonte/cartgris2.png" alt="">
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
                  <div class="row btn-valider_container">
                     <div class="btn-valider">
                        <a class="btn-large waves-effect waves-light">Valider</a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="container devis-content-mg">
                        <div class="block_devis_content">
                           <input type="hidden" id="urlretour" name="urlretour" value=""/>
                           <!--                         <a href="#" id="close-menu-banner" class="hide-on-med-and-down">Fermer</a>
                              -->                            
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
            <div class="row pneu-container" id="pneu-from-tb">
               <form method="post" action="https://devis.ad.fr/processForm/" id="pneu-form">
                  <div class="container content-form">
                     <div class="row penu-bloc-content">
                        <div class="col m12 s12 l12">
                           <h2 class="devis-bloc-title">Trouvez les pneus qui vous conviennent et faites les monter dans l’un de nos garages</h2>
                        </div>
                        <div class="col l3">
                           <label for="">Type du pneu</label>
                           <div id="div-pneu-type">
                              <select name="recherchePneus[type-pneu]" id="type-pneus" class="browser-default">
                                 <option value="" selected="selected">TOUS</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l3">
                           <label for="">Marque</label>
                           <div id="div-pneu-marque">
                              <select name="recherchePneus[marque-pneu]" id="marque-pneus" class="browser-default">
                                 <option value="" selected="selected">TOUTES</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1">
                           <label for=""><span class="picto-cercle-num">1</span> Largeur</label>
                           <div id="div-pneu-width">
                              <select name="recherchePneus[largeur]" id="width" class="browser-default">
                                 <option value="205" selected="selected">205</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1">
                           <label for=""><span class="picto-cercle-num">2</span> Hauteur</label>
                           <div id="div-pneu-aspect">
                              <select name="recherchePneus[hauteur]" id="aspect" class="browser-default input-field-bottom-red">
                                 <option value="55" selected="selected">55</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1">
                           <label for=""><span class="picto-cercle-num">3</span> Diamètre</label>
                           <div id="div-pneu-rim">
                              <select name="recherchePneus[diametre]" id="rim" class="browser-default">
                                 <option value="16" selected="selected">16</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1">
                           <label for=""><span class="picto-cercle-num">4</span> Charge</label>
                           <div id="div-pneu-load">
                              <select name="recherchePneus[charge]" id="load" class="browser-default">
                                 <option value="91" selected="selected">91</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1">
                           <label for=""><span class="picto-cercle-num">5</span> Vitesse</label>
                           <div id="div-pneu-speed">
                              <select name="recherchePneus[vitesse]" id="speed" class="browser-default">
                                 <option value="V" selected="selected">V</option>
                              </select>
                           </div>
                        </div>
                        <div class="col l1  button-bloc-penu-mobile">
                           <div>
                              <input id="formname" type="hidden" name="formname" value="recherchePneus"/> <input id="prestation-choix" type="hidden" name="recherchePneus[prestation-choix]" value="22"/>
                              <input id="detail-prestation" type="hidden" name="recherchePneus[detail-prestation]" value="220101"/> <input id="season" type="hidden" name="recherchePneus[saison]" value="été"/> <input id="runflat" type="hidden" name="recherchePneus[runflat]" value="0"/> <input id="renforce" type="hidden" name="recherchePneus[renforce]" value="0"/> <input id="coderep" type="hidden" name="recherchePneus[coderep]" value=""/>
                              <input id="pneu-id-garage" type="hidden" name="recherchePneus[garage-id]" value=""/>
                              <button id="pneuSearchDevisHautReseauMobile" class="btn pneu-button pneu-btn-bloc" type="button">Rechercher</button>
                           </div>
                        </div>
                     </div>
                     <div class="row pneu-block-footer">
                        <div class="col m6">
                           <div class="pneu-img"></div>
                        </div>
                        <div class="col l3 pneu-checkboxs">
                           <input type="checkbox" name="recherchePneus[runflat-input]" id="runflat-input"> <label for="runflat-input"><span>Runflat</span></label>
                           <label for="" class="bullInfoPneu"><i class="blocbullInfoPneuContent">Roulage à plat</i><span class="picto-cercle-num">i</span></label> <input type="checkbox" name="recherchePneus[renforce-input]" id="renforce-input"> <label for="renforce-input"><span>Renforcé</span></label>
                        </div>
                        <div class="col l3 button-content-penu">
                           <button id="pneuSearchDevisHautReseau" class="btn pneu-button pneu-btn-bloc" type="submit">Rechercher</button>
                        </div>
                     </div>
                  </div>
                  <div class="block_devis_modals pneuSearchGarage block_devis_modals2">
                     <div class="links-arrow">
                        <!-- Modal Structure -->
                        <div id="searchGaragePneu_modal" class="modal">
                           <div class="modal-content">
                              <h2 class="home-titles">Trouver Votre garage dans Notre Réseau</h2>
                              <div class="row pneuModalContent">
                                 <div>
                                    <div class="SearchPneuLabel">
                                       <label for="">Entre votre code postal</label>
                                    </div>
                                    <div class="searchInput">
                                       <input id="pneu-source-form" type="hidden" name="pneu-source-form" value="0"/> <input id="searchGaragePneuModal-data" type="text" placeholder="" style="display: none" class="numeric" autocomplete="off"> <input id="searchGaragePneuModal" placeholder="Exemple : 34890" type="text" class="numeric" autocomplete="off"/>
                                    </div>
                                    <div>
                                       <button class="btn pneu-button pneu-btn-bloc" id="search_garages_digitas" type="button">Rechercher</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
           
         </div>
      </div>
      <div class="row btn-valider_row">
         <div class="btn-valider">
            <a class="btn-large waves-effect waves-light  ">Valider</a>
         </div>
      </div>
      <!-- bloc de lien -->
      <div id="block-links" class="hide-on-small-only container">
         <div class="container">
            <div class="row">
               <div class="col s12 m3 title">
			   
			   <?php
			   
			   
			   $commitment_title = get_field('commitment_title'); 
			   if($commitment_title): ?>
                  <h2><?php echo $commitment_title; ?></h2>
				 <?php endif; ?>
               </div>
               <div class="col s12 m9">
                  <div class="col s12 m6">
                     <div>
					 
					 <?php $first_link = get_field('first_link');  ?>
                        <a href="<?php  $first_link['url']; ?>" class="link-xl-prix">
						 <?php 
						 
						 $first_title = get_field('first_title'); 
						 
						if($first_title): ?>
                           <h3><?php echo $first_title; ?></h3>
						 <?php endif; ?>
                        </a>
                        <a href="<?php echo $first_link['url']; ?>" class="link-s-more"><?php echo $first_link['title']; ?></a>
                     </div>
					 
					 
					 
					 <div>
					 
					 <?php $second_link = get_field('second_link');  ?>
                        <a href="<?php  $second_link['url']; ?>" class="link-xl-garantie">
						 <?php 
						 
						 $second_title = get_field('second_title'); 
						 
						if($second_title): ?>
                           <h3><?php echo $second_title; ?></span></h3>
						 <?php endif; ?>
                        </a>
                        <a href="<?php echo $second_link['url']; ?>" class="link-s-more"><?php echo $second_link['title']; ?></a>
                     </div>
					 
                  </div>
                  <div class="col s12 m6">
				  
				   <div>
					 
					 <?php $third_link = get_field('third_link');  ?>
                        <a href="<?php  $third_link['url']; ?>" class="link-xl-presta">
						 <?php 
						 
						 $third_title = get_field('third_title'); 
						 
						if($third_title): ?>
                           <h3><?php echo $third_title; ?></span></h3>
						 <?php endif; ?>
                        </a>
                        <a href="<?php echo $third_link['url']; ?>" class="link-s-more"><?php echo $third_link['title']; ?></a>
                     </div>
					 
					 
					 <div>
					 
					 <?php $fourth_link = get_field('fourth_link');  ?>
                        <a href="<?php  $fourth_link['url']; ?>" class="link-xl-devis">
						 <?php 
						 
						 $fourth_title = get_field('fourth_title'); 
						 
						if($fourth_title): ?>
                           <h3><?php echo $fourth_title; ?></span></h3>
						 <?php endif; ?>
                        </a>
                        <a href="<?php echo $fourth_link['url']; ?>" class="link-s-more"><?php echo $fourth_link['title']; ?></a>
                     </div>
				  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container container-ad">
         <div class="row">
            <div class="form-ve-loc">
               <div class="row title">
                  <div class="col s12 m12 l12">
				  
				  
				 <?php 
						 
				$online_service_text = get_field('online_service_text'); 
						 
				if($online_service_text): ?>
                     <?php echo $online_service_text; ?>
				<?php endif; ?>
				  
				  
                  </div>
               </div>
               <ul class="slider commerce-prestations hide-on-med-and-down">
			   
			   
			   
			   <?php $all_services = get_field('all_services');
				if($all_services):
				foreach($all_services as $service): ?>
                  <li>
                     <a href="<?php echo $service['service_link']['url']; ?>" class="btn-rdv-clignotant">
                        <article>
                           <h3><?php echo $service['ser_title']; ?></h3>
                           <div class="img-prestation">
                             <img src="<?php echo $service['sr_image']['url']; ?>" alt="<?php echo $service['sr_image']['title']; ?>">
                           </div>
                           <div class="itm-price">
                              <span>&Agrave; PARTIR DE</span>
                              <strong><?php echo $service['sr_price']; ?><em>,00&euro;*</em></strong>
                           </div>
                           <span class="c-main-button__first waves-effect waves-light">Prendre rendez-vous</span>
                        </article>
                     </a>
                  </li>
				  
			<?php endforeach; endif; ?>	  
				  
				  
               
                
                
               </ul>
			    <?php $offers_link = get_field('offers_link');
				if($offers_link): ?>
               <div class="commerce-btn-prestations hide-on-small-only">
                  <a href="<?php echo $offers_link['url']; ?>" class="c-main-button__second waves-effect waves-light">
                 <?php echo $offers_link['title']; ?>
                  </a>
               </div>
			   <?php endif; ?> 
			   
            </div>
         </div>
         <!-- Slide -->
         <div class="row pneu-block">
            <div class="pneu-background"></div>
            <form method="post" action="https://devis.ad.fr/processForm/" id="bloc-pneu-form">
               <div class="container" id="bloc-pneu-from-tb">
                  <div class="col l12 s12 m12">
                     <h2 class="devis-bloc-title">Trouvez les pneus qui vous conviennent et faites les monter dans l’un de nos garages</h2>
                  </div>
                  <div class="row pneu-content">
                     <div class="col l3">
                        <label for="">Type du pneu</label>
                        <div id="div-bloc-pneu-type">
                           <select name="recherchePneus[type-pneu]" id="bloc-type-pneus" class="browser-default">
                              <option value="" selected="selected">TOUS</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l3">
                        <label for="">Marque</label>
                        <div id="div-bloc-pneu-marque">
                           <select name="recherchePneus[marque-pneu]" id="bloc-marque-pneus" class="browser-default">
                              <option value="" selected="selected">TOUTES</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l1">
                        <label for=""><span class="picto-cercle-num">1</span> Lageur</label>
                        <div id="div-bloc-pneu-width">
                           <select name="recherchePneus[largeur]" id="bloc-width" class="browser-default">
                              <option value="205" selected="selected">205</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l1">
                        <label for=""><span class="picto-cercle-num">2</span> Hauteur</label>
                        <div id="div-bloc-pneu-aspect">
                           <select name="recherchePneus[hauteur]" id="bloc-aspect" class="browser-default input-field-bottom-red">
                              <option value="55" selected="selected">55</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l1">
                        <label for=""><span class="picto-cercle-num">3</span> Diametre</label>
                        <div id="div-bloc-pneu-rim">
                           <select name="recherchePneus[diametre]" id="bloc-rim" class="browser-default">
                              <option value="16" selected="selected">16</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l1">
                        <label for=""><span class="picto-cercle-num">4</span> Charge</label>
                        <div id="div-bloc-pneu-load">
                           <select name="recherchePneus[charge]" id="bloc-load" class="browser-default">
                              <option value="91" selected="selected">91</option>
                           </select>
                        </div>
                     </div>
                     <div class="col l1">
                        <label for=""><span class="picto-cercle-num">5</span> Vitesse</label>
                        <div id="div-bloc-pneu-speed">
                           <select name="recherchePneus[vitesse]" id="bloc-speed" class="browser-default">
                              <option value="V" selected="selected">V</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row pneu-block-footer">
                     <div class="x6">
                        <div class="pneu-img"></div>
                     </div>
                     <div class="x3 pneu-checkboxs">
                        <input type="checkbox" ame="recherchePneus[runflat-input]" id="bloc-runflat-input"> <label for="bloc-runflat-input"><span>Runflat</span></label>
                        <label for="" class="bullInfoPneu"><i class="blocbullInfoPneuContent">Roulage à plat</i><span class="picto-cercle-num">i</span></label> <input type="checkbox" ame="recherchePneus[renforce-input]" id="bloc-renforce-input"> <label for="bloc-renforce-input"><span>Renforcé</span></label>
                     </div>
                     <div class="x3">
                        <input id="bloc-formname" type="hidden" name="formname" value="recherchePneus"/> <input id="bloc-prestation-choix" type="hidden" name="recherchePneus[prestation-choix]" value="22"/>
                        <input id="bloc-detail-prestation" type="hidden" name="recherchePneus[detail-prestation]" value="220101"/> <input id="bloc-season" type="hidden" name="recherchePneus[saison]" value="été"/> <input id="bloc-runflat" type="hidden" name="recherchePneus[runflat]" value="0"/> <input id="bloc-renforce" type="hidden" name="recherchePneus[renforce]" value="0"/> <input id="coderep" type="hidden" name="recherchePneus[coderep]" value=""/>
                        <input id="bloc-pneu-id-garage" type="hidden" name="recherchePneus[garage-id]" value=""/>
                        <button id="pneuSearchDevisBlocReseau" class="btn pneu-button pneu-btn-bloc pneu-btn-bloc-down" type="button">Rechercher</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="row">
            <div class="blocs-lien blocs-liens-3cols hide-on-small-only bloc-nos-services">
			
			
				<?php 
				
				$homepagepost = new WP_Query(array(
					'post_type'		=> 'post',
					'posts_per_page'=> 3,
				));
				
				while($homepagepost->have_posts()): $homepagepost->the_post(); ?>
               <div class="col m4 l4">
                  <h2 class="title home-titles"><?php the_title(); ?>
                  </h2>
                  <div class="bloc type1 input-field-submit">
                     <a class="blocs-liens-link-img" href="<?php the_permalink(); ?>">
					 
                 <?php the_post_thumbnail(); ?>
					 
					 
					 </a>
                     <div class="blocs-liens-description">
					 
					 <?php echo wp_trim_words(get_the_content(),28,'</div>
                     <div class="imgbtn"><a href="'.get_the_permalink().'" title="" class="btn-large waves-effect waves-light">Découvrir</a></div>'); ?>
					 
					 
                     
                  </div>
               </div>
               <?php endwhile; ?>
			   
			   
			   
			   
			   
			   
            </div>
            <div class="hide-on-med-and-up ContratMobile">
			
			<?php 
				
				$homepagepost = new WP_Query(array(
					'post_type'		=> 'post',
					'posts_per_page'=> 3,
				));
				
				while($homepagepost->have_posts()): $homepagepost->the_post(); ?>
               <div class="element" style="background:#f6f6f6 url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat 0 0">
                  <a href="#">
                     <h2 class="title services-titles"><?php the_title(); ?>
                     </h2>
                  </a>
                  <span class="picto-services"></span>
               </div>
			   
			    <?php endwhile; ?> 
			   
			   
			   
            </div>
         </div>
         <div class="row">
            <div class="bg-slider-vehicule"></div>
            <div class="form-ve-loc">
               <div class="hide-on-med-and-down">
                  <div class="row title">
                     <div class="col s12 m5">
					 
				 <?php 
					  
					 $page_id     = get_queried_object_id();
						 
				$sel_titles_opt = get_field('sel_titles_opt' ,$page_id); 
						 
				 if($sel_titles_opt): ?>
				<h2 class="home home-titles"> <?php echo $sel_titles_opt; ?></h2>
                    
				<?php endif;  ?>
					 
					 
                        
                     </div>
                     <div class="col s12 m7">
                        <div>
                           <a class="btn-grey active" href="#">Occasion</a>
						   <a class="btn-grey" href="#">Véhicules Particuliers</a>
                           <a class="btn-grey" href="#">Véhicules Utilitaires</a>
                           <a class="btn-grey" href="#">Reprise Cash</a>
                           <a href="#" title="Tous nos véhicules" class="link-vehicules">Tous nos véhicules</a>
                        </div>
                     </div>
                  </div>
                  <ul class="slider vehicules">
				  
				  
				<?php $sales_slider = get_field('sales_slider',  $page_id );
				if($sales_slider):
				foreach($sales_slider as $sales): ?>
				  
				  
                     <li>
                        <a href="<?php echo $sales['slide_link']['url']; ?>">
                           <img src="<?php echo $sales['slide_image']['url']; ?>" width="150" height="99" alt=""/>
                           <div class="detail">
                              <h3><?php echo $sales['slide_title']; ?></h3>
                              <strong><?php echo $sales['slide_price']; ?> &euro;</strong>
                           </div>
                        </a>
                     </li>
					 
			<?php endforeach; endif; ?>		 
					
                  
                 
                  </ul>
               </div>
               <div class="displayBlocLocation">
                  <h2 class="title  home-titles">Vente & location <span class="breakline">de véhicules</span></h2>
                  <div class="row">
                     <div class="col m4 s6 vehicules type2">
                        <a href="#" >
                           <div class="item type2">
                              Occasions
                              <span>1386 véhicules</span>
                           </div>
                        </a>
                     </div>
                     <div class="col m4 s6 vehicules type2">
                         <a href="#" >
                           <div class="item type3">
                              Véhicules Particuliers
                           </div>
                        </a>
                     </div>
                     <div class="col m4 s6 vehicules type2">
                          <a href="#" >
                           <div class="item type3">
                              Véhicules Utilitaires
                           </div>
                        </a>
                     </div>
                     <div class="col m4 s6 vehicules type2">
                        <a href="#" >
                           <div class="item type4">
                              Reprise Cash
                           </div>
                        </a>
                     </div>
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
                           <a href="#" class="link-xl-mob-prix">Transparence des prix</a>
                           <a href="#" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                     <div>
                        <div>
                           <a href="#" class="link-xl-mob-garantie">Garantie constructeur préservée</a>
                           <a href="#" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m6">
                     <div>
                        <div>
                           <a href="#" class="link-xl-mob-presta">Prestations techniques multimarques</a>
                           <a href="#" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                     <div>
                        <div>
                           <a href="#" class="link-xl-mob-devis">Devis et RDV en ligne immédiat 24h/24</a>
                           <a href="#" class="link-s-more">En savoir plus</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>