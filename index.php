<?php get_header(); ?>

<div id="contenedorportada">
   
      <div id="imagenportada">
       <img src="<?php echo get_template_directory_uri() ?>/images/fondop.jpg" ALT="fondo">

    
    

       
    <div id="menuindex">
     <?php wp_nav_menu(
           array(
            'menu' => 'MenuTheme'
        ) ); ?>

    </div>
    

</div><!-- end of nivoslider -->
</div>
<?php get_sidebar();?>

<div id="post">
     <?php 
        if (have_posts()) {
         while (have_posts()) {
            the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
            <?php the_content();
         }
        }
       
       ?>
    
    
    
</div>

<?php get_footer();?>

