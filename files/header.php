<!doctype html>
<html lang="en">
    <head>
        
        <title>Awesome Theme</title>
        
        <?php wp_head();?>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>            
            .navbar .nav {
                display: block;
                float: right;
                left: 0;
                margin: 0 10px 0 0;
                position: relative;
            }     
        </style>
    
    </head>
    
<?php
    if(is_home()):
        $awesome_classes = array('awesome-class','my-class');
    else:
        $awesome_classes = array('no-awesome-class');
    endif;
?>
    
<body <?php body_class(array($awesome_classes)); ?>>
    
    <div class="container">
    
    <div class="row">
        
    <div class="col-xs-12 col-sm-12">
            
        <nav class="navbar navbar-default">
            
        <div class="container-fluid">
            
        <div class="navbar-header">
            
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
            
          <a class="navbar-brand" href="#" style="float:left">Website Name</a>
            
        </div> <!-- nav-header -->
        <div class="collapse navbar-collapse" id="myNavbar">    
            
          <?php 
                wp_nav_menu(array(
                    'theme_location'=>'primary',
                    'container' => false,
                    'menu_class'=>'nav navbar-nav navbar-right'
                )
            );
          ?>
          
      </div><!-- collapse -->
    </div><!--  container-fluid  -->
    </nav>
            

    <div class="search-form-container">

        <?php get_search_form(); ?>

    </div>
    
    </div><!-- column width -->
        
    </div> <!-- row -->

    <!--(get_custom_header());-->

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />