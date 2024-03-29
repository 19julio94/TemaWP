<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
    <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>
  
  <div id="content-wrapper">
    <div id="header">
     
      <div id="logo">
        
        <img src="<?php echo get_template_directory_uri() ?>/images/Logo.png" ALT="logo">
       
      </div>
      <div  id="menu">
         <ul >
            <li><a href="https://pruebasclasedam2-jpatricio.c9users.io/">Inicio</a></li>
            <li><a href="#">Page</a></li>
           
            <li><a href="#">Single Page</a></li>
        </ul>
      </div>
      
      <div class"grow" id="menu-top">
         <ul>
            <li ><a href="https://github.com/19julio94"><img class="grow"src="/wp-content/themes/ThemeProject/images/git.png" /></a></li>
            <li><a href="https://wordpress.org/"><img class="grow" src="/wp-content/themes/ThemeProject/images/wp.png" /></a></li>
            
        </ul>
      </div>
      
      
      
     
    </div> 
   
 </div>

  
  
  
  
  
  
  
  
