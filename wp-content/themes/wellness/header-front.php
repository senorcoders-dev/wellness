<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
    <?php wp_head(); ?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
</head>

<body  <?php body_class(); ?>>
    
<!-- LOADER -->
<!-- <div id="loader-wrapper">
<div id="loader"></div>
</div> -->
<!-- LOADER -->
    
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="main-header">
            <div class="main-navbar">
                <div class="navbar-wrapper">
                   <?php include 'template-parts/top-header.php'; ?>
                    <hr class="top">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>"><h2>WELL<span-point>NESS</span-point></h2>
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            	 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false,  'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

                     
                        </div><!-- /.navbar-collapse -->
                     
                    </nav>
                </div>
            </div>
    
            <div class="main-slider">
                <div id="first-slider" class="">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade">
                        <div class="carousel-inner" role="listbox">
                            <!-- Item 1 -->
                            <div class="item slide1 active">
                                <div class="row">
                                    <div class="content">
                                        <h3><strong>TRAIN YOUR</strong> BODY</h3>
                                        <h2>START NOW</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item slide2">
                                <div class="row">
                                    <div class="content">
                                        <h3><strong>STAY</strong> FIT</h3>
                                        <h2>START NOW</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item slide3">
                                <div class="row">
                                    <div class="content">
                                        <h3><strong>BODY</strong> IMPROVE</h3>
                                        <h2>START NOW</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item slide4">
                                <div class="row">
                                    <div class="content">
                                        <h3><strong>BUILD</strong> MUSCLE</h3>
                                        <h2>START NOW</h2>
                                    </div>
                                </div>
                            </div>
                         </div>
                          <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic"
                            role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                            </a>
                        </div>
                  </div>
            </div>
            
        </div>
        <!-- END MAIN HEADER -->
        
        <div class="main-flat">
            <div class="section-flat">
                <div class="call-out">
                    <div class="text-label">
                        <h3>FREE 15 DAYS MEMBERSHIP</h3>
                        <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                    </div>
                    <p><button type="button" class="btn-callout">JOIN NOW!</button></p>
                </div>
            </div>
        </div>