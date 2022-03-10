
<footer class="site__footer">
<!--<div class="site__footer_colonne">
    <section class="footer__adresse">3800, rue Sherbrooke Est Montréal</section>
    <section class="footer__article"></section>
    <section class="footer__lien">
        <?php
            wp_nav_menu(array("menu"=>"lien_externe"));
        ?>
    </section>
    
<div class="site__footer_ligne">
    <section class="footer__description">4w4-Conception d'interfaces et développement Web</section>
    <section class="footer__copyright">&copy; Collège de Maisonneuve - Tout droit réserver</section>
    <section class="footer__menu">
        <?php /*
             $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"footer",
                                    "container"=>"nav",
                                    "container_class" =>"footer__menu__nav",
                                    "menu_class"=>"site__footer__menu__nav__ul",
                                    "link_after"=> $icone));
                                    
        */?>
    </section>
    <section class="footer__recherche"> <?php /* get_search_form(); */?></section>
    <section class="footer__Auteur">Marc-Antoine Sicotte</section>
    
</div> -->

 <div class="site__footer__zone1">
    <ul class="infos">
        <li>3800, rue Sherbrooke Est Montréal</li>
        <li>(Québec) H1X 2A2</li>
        <li> 514 254-7131</li>
        <li>Intégration Multimédia</li>
    </ul>


    <div class="menu3">
        
    </div>
    
    


   

    <p class="text">
        <?php get_sidebar( 'pied_page_zone2' ); ?>
    </p>
    </div> 

    <div class="site__footer__zone2">
    <?php 
             $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"secondaire",
                                    "container"=>"nav",
                                    "container_class" =>"site__footer__menu",
                                    "menu_class"=>"site__footer__menu__ul",
                                    "link_after"=> $icone));
                                    
        ?> 
        <section class="footer__recherche"> <?php  get_search_form(); ?></section>
   
    </div>
    

        
</footer>
<?php wp_footer();?>



