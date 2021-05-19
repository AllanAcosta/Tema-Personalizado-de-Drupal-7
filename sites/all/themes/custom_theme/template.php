<?php

/**
 * @file
 * Bootstrap sub-theme.
 *
 * Place your custom PHP code in this file.
 */
function custom_theme_preprocess_html(&$variables){
    
    // Stylesheets
    drupal_add_css('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array('type' => 'external'));
    drupal_add_css('https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array('type' => 'external'));
    drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array('type' => 'external'));
    

    //Scripts
    drupal_add_js('https://code.jquery.com/jquery-3.5.1.min.js', 'external');
    drupal_add_js('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', 'external');
    drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', 'external');
    drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', 'external');

}

