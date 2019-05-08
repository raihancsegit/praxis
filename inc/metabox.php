<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 4/3/2019
 * Time: 8:34 AM
 */

add_filter('cs_metabox_options','praxis_metabox_option');
function praxis_metabox_option($metabox){

    $metabox = array();
    $metabox[]        = array(
        'id'            => '_pagetitle',
        'title'         => esc_html__( 'Inner Page Title Option', 'praxis' ),
        'post_type'     => 'page', // or post or CPT or array( 'page', 'post' )
        'context'       => 'normal',
        'priority'      => 'default',
        'sections'      => array(

            // begin section
            array(
                'name'      => 'Title breadcrumb',
                'icon'      => 'fa fa-wifi',
                'fields'    => array(

                    array(
                        'id'    => 'banner_swi',
                        'type'  => 'switcher',
                        'title' => esc_html__('banner On/OFF','praxis')
                    ),

                    array(
                        'id'    => 'banner',
                        'type'  => 'image',
                        'title' => esc_html__('Baner upload','praxis'),
                        'dependency' => array('banner_swi','==','true')
                    ),






                ),
            ),

        ),
    );

    return $metabox;

}