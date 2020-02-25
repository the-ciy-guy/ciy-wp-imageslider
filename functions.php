<?php 

/*
    @package imageslider

    functions.php Template
*/

// Enqueue Files
function load_scripts($hook){
    wp_enqueue_style('slider_css', get_template_directory_uri() . '/css/slider.style.css', array(), false, 'all');
    wp_enqueue_script('slider_js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add Slider Customizer
function imageslider_theme_customize_register($wp_customize){
    $wp_customize->add_section('slider_settings', array(
        'title'         => __('Slider', 'imageslider'),
        'description'   => sprintf(__('Setup your slider')),
        'priority'      => 220
    ));

    $wp_customize->add_setting('slider_one', array(
        'default'   => get_template_directory_uri() . '/img/coffee1.jpeg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_one', array(
        'label'     => __('Image One', 'imageslider'),
        'section'   => 'slider_settings',
        'settings'  => 'slider_one',
        'priority'  => 1
    )));
    
    $wp_customize->add_setting('slider_one_header', array(
        'default'   => _x('Image One', 'imageslider'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_one_header', array(
        'label'     => __('Slider One Header', 'imageslider'),
        'section'   => 'slider_settings',
        'priority'  => 2
    ));

    $wp_customize->add_setting('slider_two', array(
        'default'   => get_template_directory_uri() . '/img/coffee2.jpeg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_two', array(
        'label'     => __('Image Two', 'imageslider'),
        'section'   => 'slider_settings',
        'settings'  => 'slider_two',
        'priority'  => 3
    )));

    $wp_customize->add_setting('slider_two_header', array(
        'default'   => _x('Image Two', 'imageslider'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_two_header', array(
        'label'     => __('Slider Two Header', 'imageslider'),
        'section'   => 'slider_settings',
        'priority'  => 4
    ));

    $wp_customize->add_setting('slider_three', array(
        'default'   => get_template_directory_uri() . '/img/coffee3.jpeg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_three', array(
        'label'     => __('Image Three', 'imageslider'),
        'section'   => 'slider_settings',
        'priority'  => 5
    )));

    $wp_customize->add_setting('slider_three_header', array(
        'default'   => _x('Slider Three Header', 'imageslider'),
        'type'      => 'theme_mod'
    ));
}
add_action('customize_register', 'imageslider_theme_customize_register');