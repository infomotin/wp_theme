<?php 
function ju_enqueue(){
    //the url 
    $theme_uri = get_theme_file_uri();
    // for style 
    wp_register_style('dz_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
    wp_register_style('dz_bootstrap',$theme_uri.'/assets/css/bootstrap.css');
    wp_register_style('dz_dark',$theme_uri.'/assets/css/dark.css');
    wp_register_style('dz_font_icons',$theme_uri.'/assets/css/font-icons.css');
    wp_register_style('dz_animate',$theme_uri.'/assets/css/animate.css');
    wp_register_style('dz_magnific_popup',$theme_uri.'/assets/css/magnific-popup.css');
    wp_register_style('dz_custom',$theme_uri.'/assets/css/custom.css');
    wp_register_style('dz_responsive',$theme_uri.'/assets/css/responsive.css');
    wp_register_style('dz_style',$theme_uri.'/assets/css/style.css');
    // for script 
    wp_register_script('dz_plugins',$theme_uri.'/assets/js/plugins.js',[],microtime(),true);
    // wp_register_script('dz_jquery',$theme_uri.'/assets/js/jquery.js',[],microtime(),true);
    wp_register_script('dz_functions',$theme_uri.'/assets/js/functions.js',[],microtime(),true);

    // for style
    wp_enqueue_style('dz_google_fonts');
    wp_enqueue_style('dz_bootstrap');
    wp_enqueue_style('dz_dark');
    wp_enqueue_style('dz_font_icons');
    wp_enqueue_style('dz_animate');
    wp_enqueue_style('dz_magnific_popup');
    wp_enqueue_style('dz_custom');
    wp_enqueue_style('dz_responsive');
    wp_enqueue_style('dz_style');

    wp_enqueue_script('dz_plugins');
    wp_enqueue_script('dz_functions');
    wp_enqueue_script('jquery');

    
    

}

?>

<!-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/custom.css" type="text/css" /> 
  <link rel="stylesheet" href="css/responsive.css" type="text/css" />

  <script src="js/jquery.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/functions.js"></script>
  
  -->