<?php get_header(); ?>
<main class="site__main-type2">
    <div class="titre">
        <h1 class="bienvenu">Bienvenu</h1>
        <h1 class="welcome">Welcome</h1>
        <h1 class="mandarin">欢迎</h1>
    </div>
    
<div class="page__standard">
    <h2>Ma plateforme Web</h2>
    <h3>582-4W4</h3>
    <p class="page__standard__p">Un site réaliser sur WordPress avec la méthode de développement SASS </p>
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