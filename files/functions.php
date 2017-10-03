    <?php

    //Always create a unique name for your functions

    /*

    ==================================================
    Include scripts
    ==================================================

    */

    function awesome_script_enqueue(){

       //css
       wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.0.0','all'); 
        
       wp_enqueue_style('customstyle',get_template_directory_uri().'/css/awesome.css',array(),'1.0.0','all');    

       
        //js
        wp_enqueue_script('jquery', true);
        wp_enqueue_script('customjs',get_template_directory_uri().'js/awesome.js', array(),'1.0.0',true);

        wp_enqueue_script('bootstrapjs',get_template_directory_uri().'js/bootstrapjs.min.js', array(),'3.0.0',true);

    }

    add_action('wp_enqueue_scripts','awesome_script_enqueue');

    /*

    ==================================================
    Include activate menus
    ==================================================

    */

    function awesome_theme_setup(){
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Header Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
    }

    add_action('init','awesome_theme_setup');

    /*

    ==================================================
    Include theme_setup
    ==================================================

    */


    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    add_theme_support('html5',array('search-form'));

    //Post Formats- lesson 7
    add_theme_support('post-formats',array('aside','image','video'));

    /*

    ==================================================
    Sidebar Function
    ==================================================

    */

    function awesome_widget_setup(){

        register_sidebar(
            array(

                'name'=>'Sidebar',
                'id'=>'sidebar-1',
                'class'=>'sidebar-custom',
                'description'=>'Standard Sidebar',
                'before_widget'=>'</aside id="%1$s" class="widget %2$s">',
                'after_widget' => '<h1 class="widget-title">',
                'before_title'=>'<h1 class="widget-title">',
                'after_title'=>'</h1>',

            )
        );

        register_sidebar(
            array(

                'name'=>'Sidebar-page',
                'id'=>'sidebar-2',
                'class'=>'sidebar-custom',
                'description'=>'Custom Sidebar',
                'before_widget'=>'</aside id="%1$s" class="widget %2$s">',
                'after_widget' => '<h1 class="widget-title">',
                'before_title'=>'<h1 class="widget-title">',
                'after_title'=>'</h1>',
                )
            );
    }
    add_action('widgets_init','awesome_widget_setup');