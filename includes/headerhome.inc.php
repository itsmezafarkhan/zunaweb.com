<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title><?php echo $title;?></title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?php echo URL .'/views/';?>css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL .'/views/';?>css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?php echo URL .'/views/';?>css/responsive-leyouts.css" type="text/css" />
    

<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="styles/colors/red.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/green.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/orange.css" />-->


<!-- just remove the below comments witch bg patterns you want to use -->
    
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-nine.css" />-->
    
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL .'/views/';?>js/rs-plugin/css/responsive.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL .'/views/';?>js/rs-plugin/css/settings.css" media="screen" />
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL .'/views/';?>js/jcarousel/skin.css" />
	
    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "<?php echo URL .'/views/';?>js/style-switcher/color-switcher.css" />
    
    <!-- ######### JS FILES ######### -->
    <!-- get jQuery from the google apis -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
    
    <!-- style switcher -->
    <script src="<?php echo URL .'/views/';?>js/style-switcher/jquery-1.js"></script>
    <script src="<?php echo URL .'/views/';?>js/style-switcher/styleselector.js"></script>
    
    <!-- main menu -->
    <script type="text/javascript" src="<?php echo URL .'/views/';?>js/mainmenu/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="<?php echo URL .'/views/';?>js/mainmenu/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL .'/views/';?>js/mainmenu/selectnav.js"></script>

    <!-- jquery jcarousel -->
 	<script type="text/javascript" src="<?php echo URL .'/views/';?>js/jcarousel/jquery.jcarousel.min.js"></script>
    
	<!-- REVOLUTION jQuery KenBurn Slider  -->
	<script type="text/javascript" src="<?php echo URL .'/views/';?>js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo URL .'/views/';?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo URL .'/views/';?>js/rs-plugin/js/custom.js"></script>
	
</head>

<body>


<div id="page_wrapper_full">

	<div class="top_section">
    
    	<div class="container">

    		<div class="two_one"><a href="index.html" class="site_logo">InfoTechAce</a></div><!-- end logo -->
        
        	<div class="two_third last">
            	
       <nav id="access" class="access" role="navigation">
        <div id="menu" class="menu">
        	
        	<ul id="tiny">
            	<li><a href="<?php echo URL;?>" <?php if($navactive == 'home') echo 'class="active"'; ?> >HOME</a></li>
                
                <li><a href="<?php echo URL .'solutions/';?>" <?php if($navactive == 'solutions') echo 'class="active"'; ?> >Solutions</a>
                	
                    <ul>
                        <li><a href="typography.html">Web Appications</a></li>
						<li><a href="elements.html">Website Design</a></li>
                        <li><a href="pricing-tables.html">Website Development</a></li>
						<li><a href="columns.html">SEO</a></li>
						<li><a href="testimonials.html">Facebook Application</a></li>
						<li><a href="faqs.html">Marketing</a></li>
						<li><a href="tabs.html">Ecommerce</a></li>
                        <li><a href="#">Sample Third Leavel &nbsp;></a>
                           	<ul>
                            	<li><a href="#">Third Leavel One</a></li>
                                <li><a href="#">Third Leavel Two</a></li>
                                <li><a href="#">Third Leavel Three</a></li>
                            </ul>
                        </li>                             
                        <li><a href="#">Custom BG &amp; Colors</a></li>
                        <li><a href="#">PSD Files Included</a></li>                             
                        <li><a href="#">Clean &amp; Valid Code</a></li>
			        </ul> 
                </li>
                
               	                
                <li><a href="<?php echo URL .'aboutus';?>" <?php if($navactive == 'aboutus') echo 'class="active"'; ?> >ABOUT US</a>
                </li>
                
                <li><a href="<?php echo URL .'blogs';?>" <?php if($navactive == 'blog') echo 'class="active"'; ?> >BLOGS</a>
                	<ul>
                    	<li><a href="blog.html">with Large image</a></li>
                        <li><a href="blog-2.html">with Small image</a></li>
                        <li><a href="blog-post.html">Single post</a></li>
                    </ul>
                </li>
                
                <li><a href="<?php echo URL .'contact';?>" <?php if($navactive == 'contact') echo 'class="active"'; ?> >CONTACT</a></li>
                
			</ul>
		</div>
  	</nav>
                
            </div>

		</div>

	</div><!-- end top -->
    

<!-- slider -->
 <div class="bannercontainer" >
					<div class="banner" >
						<ul>
                            
							<!-- SLIDE ONE -->
							<li data-transition="slideleft" data-slotamount="10"  data-masterspeed="300"  data-link="index.html" data-thumb="">
								<img src="<?php echo URL;?>views/images/spacer.gif" alt="" />
                     
                                <div class="caption lfb" data-x="290" data-y="160" data-speed="700" data-start="100" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-res-img2.png" alt="" class="slider_img_pur"></div>
                                
                                <div class="caption lfb" data-x="90" data-y="295" data-speed="700" data-start="1000" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-res-img1.png" alt="" class="slider_img_pur"></div>
                                
                                <div class="caption lfb" data-x="770" data-y="357" data-speed="800" data-start="1400" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-res-img4.png" alt="" class="slider_img_pur"></div>
                                
                                <div class="caption lfb" data-x="670" data-y="357" data-speed="800" data-start="1800" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-res-img3.png" alt="" class="slider_img_pur"></div>
                                                       
                                
                                <div class="caption lft main_text"  data-x="150" data-y="45" data-speed="700" data-start="800" data-easing="easeOutBack">Responsive HTML5 and CSS3 Theme</div>
                                
                                <div class="caption lft sub_text"  data-x="70" data-y="110" data-speed="500" data-start="1200" data-easing="easeOutBack">with Unique Pages, Awesome Slideshows, Unique Color Variations. Easy-to-customize &amp; fully featured design.</div>

                        
                        <div class="caption lfb leaf_text2"  data-x="540" data-y="155" data-speed="700" data-start="1600" data-easing="easeOutBack">Computer<br>Desktop<br>Use</div>
                        
                        <div class="caption lfb leaf_text1"  data-x="130" data-y="210" data-speed="700" data-start="1700" data-easing="easeOutBack">Tablet<br>Portrait<br>Use</div>
                        
                        <div class="caption lfb leaf_text3"  data-x="675" data-y="290" data-speed="700" data-start="1900" data-easing="easeOutBack">iphone<br>portrait/<br>landscape</div>
                        
                        <div class="caption lfb leaf_text4"  data-x="870" data-y="265" data-speed="700" data-start="2000" data-easing="easeOutBack">Tablet<br>Portrait<br>Use</div>      

							</li>
                            
                            
                            <!-- SLIDE TWO -->
							<li data-transition="slideleft" data-slotamount="3"  data-masterspeed="300"  data-link="index.html" data-thumb="">
								<img src="<?php echo URL;?>views/images/spacer.gif" alt="" />
                     
                                <div class="caption lft" data-x="560" data-y="18" data-speed="700" data-start="100" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-img02.png" alt="" class="slider_img_pur"></div>
                                                       
                                
                                <div class="caption lft main_text"  data-x="0" data-y="70" data-speed="700" data-start="800" data-easing="easeOutBack">Awesome Slideshows</div>
                                
                                <div class="caption lft sub_text"  data-x="0" data-y="135" data-speed="500" data-start="1200" data-easing="easeOutBack">Easy-to-customize and Create Outstanding Website in Minutes!</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="200" data-speed="300" data-start="1800" data-easing="easeOutExpo" >Revolution Slider Responsive with must-see-effects</div>
                                             
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="240" data-speed="300" data-start="2000" data-easing="easeOutExpo" >iosSlider is a jQuery which allows you to integrate a customizable</div>
                                        
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="280" data-speed="300" data-start="2200" data-easing="easeOutExpo" >Nivo Slider is the most beautiful &amp; easy to use amazing transition effects</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="320" data-speed="300" data-start="2400" data-easing="easeOutExpo" >Static Image slide header the image do you want it to be truly static</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="360" data-speed="300" data-start="2600" data-easing="easeOutExpo" >Video full Slider if you want it to use video in the header</div>
                                
                                <div class="caption button1-s sfb stb" data-x="0" data-y="415" data-speed="300" data-start="2800" data-easing="easeOutExpo" ><a href="#">get more features!</a></div>          
                                       
                        	<div class="caption lfb leaf_text2"  data-x="550" data-y="155" data-speed="700" data-start="1600" data-easing="easeOutBack">Computer<br>Desktop<br>Use</div>
                       

							</li>



                            <!-- SLIDE THREE -->
							<li data-transition="slideleft" data-slotamount="3"  data-masterspeed="300"  data-link="index.html" data-thumb="">
								<img src="<?php echo URL;?>views/images/spacer.gif" alt="" />
                     
                                <div class="caption lft" data-x="565" data-y="18" data-speed="700" data-start="100" data-easing="easeOutBack"><img src="<?php echo URL;?>views/images/slider/slider-img03.png" alt="" class="slider_img_pur"></div>
                                                       
                                
                                <div class="caption lft main_text"  data-x="0" data-y="70" data-speed="700" data-start="800" data-easing="easeOutBack">Cross Browser Support</div>
                                
                                <div class="caption lft sub_text"  data-x="0" data-y="135" data-speed="500" data-start="1200" data-easing="easeOutBack">Easy-to-customize and Create Outstanding Website in Minutes!</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="200" data-speed="300" data-start="1800" data-easing="easeOutExpo" >Mozilla Firefox new versions browser compatibility</div>
                                             
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="240" data-speed="300" data-start="2000" data-easing="easeOutExpo" >Internet Explorer new versions browser compatibility</div>
                                        
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="280" data-speed="300" data-start="2200" data-easing="easeOutExpo" >Google Chrome new versions browser compatibility</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="320" data-speed="300" data-start="2400" data-easing="easeOutExpo" >Safari new versions browser compatibility</div>
                                
                                <div class="caption medium_grey sfb stb" data-x="0" data-y="360" data-speed="300" data-start="2600" data-easing="easeOutExpo" >Opera new versions browser compatibility</div>
                                
                                <div class="caption button1-s sfb stb" data-x="0" data-y="415" data-speed="300" data-start="2800" data-easing="easeOutExpo" ><a href="#">get more features!</a></div>          

							</li>    
                            
                            
						</ul>
                        
                        
						<!--<div class="tp-bannertimer"></div>-->
					</div>
				</div>
 

 <!-- end slider -->
