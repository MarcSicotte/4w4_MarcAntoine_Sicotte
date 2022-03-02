
<footer class="site__footer">
    <div class="site__footer__zone1">
    <ul class="infos">
        <li>3800, rue Sherbrooke Est Montréal</li>
        <li>(Québec) H1X 2A2</li>
        <li> 514 254-7131</li>
        <li>Intégration Multimédia</li>
    </ul>
    

   

    <h3 class="text">
            Un site web fait par Marc-Antoine Sicotte 4w4 TIM
    </h3>
    </div>

    <div class="site__footer__zone2">
    <?php 
             $icone = '<svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"footer",
                                    "container"=>"nav",
                                    "container_class" =>"site__footer__menu",
                                    "menu_class"=>"site__footer__menu__ul",
                                    "link_after"=> $icone));
                                    
        ?>
    </div>
    

        
</footer>
<?php wp_footer();?>



