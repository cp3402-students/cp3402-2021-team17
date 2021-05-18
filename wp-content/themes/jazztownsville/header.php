<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jazztownsville
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
    
    <div class="container">
            
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">
          <?php echo get_custom_logo(); ?>
      </a>
       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
        
        <?php  
            
            $menu_arr = wp_get_nav_menu_items( 'navigation_menu' );
            foreach($menu_arr as $menu) {
                ?>

            
          <a class="nav-item nav-link" href="<?php echo $menu->url; ?>"><?php  echo $menu->title ?></a>
                
        <?php        
            }
        ?>

        </div>
      </div>
      
</nav>    
        
        
    </div>
    