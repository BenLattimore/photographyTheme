<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
        <?php
            
            wp_title( '-', true, 'right' );

            bloginfo( 'name' );

        ?>
    </title>         
    
     <?php wp_head(); ?>                
        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
        
    
        
    </head>
    
    <body>
        
        
        <div class="row">
            <div class="col-sm-3" id="menuBlock">
                <h1 class="text-center">Satin Star Photography</h1>            
                <?php 

                    $args = array(
                        'menu' => 'main-menu'  
                    );

                    wp_nav_menu ( $args);   

                ?>            
                <div id="footer" class="text-center">
                    <p>&copy; <?php echo date ( Y ); ?> Satin Star Photography</p>
                    <p>All Rights Reserved</p>
                    <p>Built with pride by <a href="http://hewo.co">hewoco</a></p>
                </div>            
            
            </div>
        