<?php 
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$gobj = new GlobalClass();
	$gobj->addinfo($actual_link);	
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title><?php echo $title;?></title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo $keyword?>" />
	<meta name="description" content="Building new websites, new website designing, Custom application building, Ecommerce websites, shopping cart " />
    
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

    		<div class="two_one"><a href="<?php echo URL;?>" class="site_logo">ZunaWeb</a></div><!-- end logo -->
        
        	<div class="two_third last">
            	
       <nav id="access" class="access" role="navigation">
        <div id="menu" class="menu">
        	
        	<ul id="tiny">
            	<li><a href="<?php echo URL;?>" <?php if($navactive == 'home') echo 'class="active"'; ?> >HOME</a></li>
                
                <li><a href="<?php echo URL .'solutions/';?>" <?php if($navactive == 'solutions') echo 'class="active"'; ?> >Solutions</a>
                	
                    <ul>
                        <li><a href="<?php echo URL .'solutions';?>/custom_application_development">CUSTOM APPLICATION DEVELOPMENT</a></li>
						<li><a href="<?php echo URL .'solutions';?>/website_development">WEBSITE DEVELOPMENT</a></li>
                        <li><a href="<?php echo URL .'solutions';?>/ecommerce_solutions">ECOMMERCE SOLUTIONS</a></li>
						<li><a href="<?php echo URL .'solutions';?>/content_management_solutions">CONTENT MANAGEMENT SOLUTIONS</a></li>
						<li><a href="<?php echo URL .'solutions';?>/web_and_graphic_design">WEB AND GRAPHIC DESIGN</a></li>
						<li><a href="<?php echo URL .'solutions';?>/mobile_webiste_development">MOBILE WEBSITE DEVELOPMENT</a></li>
						
						
                        <!--<li><a href="typography.html">Web Appications</a></li>
						<li><a href="elements.html">Website Design</a></li>
                        <li><a href="pricing-tables.html">Website Development</a></li>
						<li><a href="columns.html">SEO</a></li>
						<li><a href="testimonials.html">Facebook Application</a></li>
						<li><a href="faqs.html">Marketing</a></li>
						<li><a href="tabs.html">Ecommerce</a></li>-->
			        </ul> 
                </li>
                
               	<!--             
                <li><a href="<?php echo URL .'aboutus';?>" <?php if($navactive == 'aboutus') echo 'class="active"'; ?> >ABOUT US</a>
                </li>
				-->
                
                <li><a href="<?php echo URL .'testimonials';?>" <?php if($navactive == 'testimonials') echo 'class="active"'; ?> >Testimonials</a>
                </li>
                
                <li><a href="<?php echo URL .'contact';?>" <?php if($navactive == 'contact') echo 'class="active"'; ?> >CONTACT</a></li>
                
			</ul>
		</div>
  	</nav>
                
            </div>

		</div>

	</div><!-- end top -->
    
<?php if($pagetitle != 'Home'){?>
<!-- page title -->
<div class="page-main-title">

	<div class="container">
		<div class="leaft-title"><h1><?php echo $pagetitle;?></h1></div>
        <div class="reght-pagenation"><?php echo $breadcrumb;?></div>
	</div>
</div><!-- end page title -->
<?php } ?>
