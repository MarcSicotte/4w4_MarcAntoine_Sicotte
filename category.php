<?php get_header(); ?>
<main class="site__main">
   <!-- <h1>-------------------------------------Category-------------------------------------</h1> -->
   <?php
        wp_nav_menu(array(
            "menu" => "categorie_cours",
            "container" => "nav"
        ));


    ?>
   <h1>Liste des cours</h2>
    <?php 

        $url_categorie = trouve_la_categorie(array('web','jeu','design', 'utilitaire', 'creation-3d', 'video'));
        $ma_categorie = get_category_by_slug($url_categorie);
        echo "<h3>" . $ma_categorie->description . "</h3>"
       
    ?>


    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <?php get_template_part("gabarits/content","cours"); ?>
        
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>