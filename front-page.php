<?php get_header(); ?>
<main class="site__main">
    <h1>-----------------------Front Page--------------------</h1>
<h2 class="main__titre">Liste des cours</h2>
    <?php if (have_posts()):the_post()?>

    <?php
        the_title();
        the_content();


    ?>
      
      
            
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>