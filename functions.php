<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Register the main navigation
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// add a favicon to the website, make this dynamic later...
function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_template_directory_uri() . '/app/assets/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


//Enque all scripts and CSS files
function school_scripts() {
    //Base CSS file includes bootstrap.css
    wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/app/assets/dist/css/style.css' );
    //Any CSS overrides that need to be done
    wp_enqueue_style( 'spare-style', get_stylesheet_uri() );

    //Jquery
    wp_enqueue_script( 'jquery' );
    //Bootstrap
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array(), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'school_scripts' );


//Swap out Wordpresses alignment classes for those of Bootstrap 3
function add_responsive_class($content){
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    $document->loadHTML(utf8_decode($content));
    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {
        //get the current wp classes
        $oldClass = $img->getAttribute('class');

        //Replace wp alignleft for pull-left
        $oldClass = str_replace("alignleft", "pull-left", $oldClass);
        //Replace wp alignright for pull-right
        $oldClass = str_replace("alignright", "pull-right", $oldClass);
        //Replace wp aligncenter for center-block
        $oldClass = str_replace("aligncenter", "center-block", $oldClass);

        //Set the replaced classes and also add the responsive img class
        $img->setAttribute('class','' . $oldClass . ' img-responsive img-thumbnail');
    }
    $html = $document->saveHTML();
    return $html;
}
add_filter('the_content', 'add_responsive_class');


