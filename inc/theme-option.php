<?php

define( 'CS_ACTIVE_FRAMEWORK',   true  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',   false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true
define( 'CS_ACTIVE_LIGHT_THEME',  true  ); 
//setting theme option 

add_filter('cs_framework_settings','praxis_theme_options_setting');

function praxis_theme_options_setting(){
    $settings = array(
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'menu_type'  => 'menu',
        'framework_title'=> 'Praxis Theme Option'
    );


    return $settings;

}

add_filter('cs_framework_options','praxis_theme_options');

function praxis_theme_options($options){
    $options = array();
    $options[]=array(
        'name'   => 'praxis-header',
        'title'  => 'Praxis Header',
        'icon'   => 'fa fa-bars',
        'fields' => array(
            array(
                'id'    => 'title_swi',
                'type'  => 'switcher',
                'title' => esc_html__('Site Title On/OFF','praxis')
            ),

            array(
                'id' => 'site_title' ,
                'type' => 'text' ,
                'title' => esc_html__( 'Site Title' , 'praxis' ) ,
                'dependency' => array('title_swi' , '==' , 'true')
            ),

            array(
                'id'    => 'logo_swi',
                'type'  => 'switcher',
                'title' => esc_html__('Logo On/OFF','praxis')
            ),

            array(
                'id'    => 'logo',
                'type'  => 'image',
                'title' => esc_html__('Logo Upload','praxis'),
                'dependency' => array('logo_swi','==','true')
            ),
        )

        );


    $options[]=array(
        'name'   => 'praxis-footer',
        'title'  => esc_html__('Praxis Footer','praxis'),
        'icon'   => 'fa fa-bars',
        'fields' => array(

            array(
                'id' => 'column_set' ,
                'type' => 'select' ,
                'title' => esc_html__ ( 'Column Select' , 'praxis' ) ,
                'options' => array(
                    '1' => 'Column 1' ,
                    '2' => 'Column 2' ,
                    '3' => 'Column 3' ,
                    '4' => 'Column 4' ,
                ) ,
            ),

            array(
                'id'    => 'copy_on',
                'type'  => 'switcher',
                'title' => esc_html__('Copyright On/OFF','praxis'),
                'default' => true,
            ),
            array(
                'id'    => 'copy',
                'type'  => 'textarea',
                'title' => esc_html__('Footer Copyright','praxis'),
                'dependency' => array('copy_on','==','true'),
                'default' => 'Copyright @ 2016 - All Right Reserved',
            ),
            array(
                'id'    => 'footer_bg_color',
                'type'  => 'color_picker',
                'title' => esc_html__('Footer Background Color','praxis'),
                'default' => '#252525',
            ),
            array(
                'id'    => 'footer_copy_color',
                'type'  => 'color_picker',
                'title' => esc_html__('Footer Copyright Text Color','praxis'),
                'default' => '#252525',
            ),


        )

    );

        return $options;

}
