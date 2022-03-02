<?php get_header(); ?>
<main class="site__main-type2">
    <h1>Bienvenu</h1>
<h2 class="main__titre">Ma plateforme web</h2>
<div class="page__standard">
    <h3>582-4W4</h3>
    <p>Un site réaliser sur WordPress avec la méthode de développement SASS </p>
</div>

    <?php if (have_posts()):the_post()?>

    <div class="site__main-type2__content">
        <?php
            the_title();
            the_content();


         ?>
    </div>
      
            
    <?php endif ?>
</main>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>