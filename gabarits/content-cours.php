    <?php 
        $categorie = get_the_category();
        
    
    ?>
    
    <?php
            $mon_titre = get_the_title();
            $mon_titre_filtre = substr($mon_titre,8);
            $_monsigle = substr($mon_titre,0,7);
            $mon_titre_filtre = substr($mon_titre_filtre,0, strrpos($mon_titre_filtre,'(')); 
            $ma_duree = substr($mon_titre,strrpos($mon_titre,'('));
        ?>
            <section class="carte <?php echo $categorie[1]->slug; ?> ">
        
                    
                    <h3 class="carte__titre">
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <a href="<?php echo get_permalink(); ?>"><?php echo $mon_titre_filtre ?></a> 
                    </h3>
                   
                    <p class="carte__contenu"><?php echo the_excerpt(); ?></p>
                
                
            </section>     