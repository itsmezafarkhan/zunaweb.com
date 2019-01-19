<?php include HOME . DS . 'includes' . DS . 'header.inc.php'; ?>
<?php 
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

<?php if(!isMobile()){ ?>
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
                                
                                <!--<div class="caption button1-s sfb stb" data-x="0" data-y="415" data-speed="300" data-start="2800" data-easing="easeOutExpo" ><a href="#">get more features!</a></div>-->
                                       
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
                                
                                <!--<div class="caption button1-s sfb stb" data-x="0" data-y="415" data-speed="300" data-start="2800" data-easing="easeOutExpo" ><a href="#">get more features!</a></div>-->

							</li>    
                            
                            
						</ul>
                        
                        
						<!--<div class="tp-bannertimer"></div>-->
					</div>
				</div>
 

 <!-- end slider -->
 <?php } ?>



 <div class="container">
 	<div class="punchline_text">
 	<!--<a href="#" class="green_big_but">get started now!</a>-->
 	<strong>ZunaWeb Pvt. Ltd. is a leading software company specializes in custom Software application</strong>
	<br/>We are a design consultancy that focuses on the user experience whether you are building a brand from scratch or improving an existing website design.
 	
 	</div>
 </div><!-- end punchline text -->
 
 
 
 <!-- how it works -->

<div class="container">
    
    <div class="mar_top4"></div>
    <div class="clearfix"></div>
    	
<!--        <div class="site_features_hline"></div> -->
        
    	<ul class="site_features_main">
        
			<li>
            <img src="<?php echo URL;?>views/images/site-features-icon4.png" alt="" /><br />
            <p>Custom web application development is at the core of what we do, day in and day out.</p>
            <strong>Web Applications</strong>
            </li>
            
            <li>
            <img src="<?php echo URL;?>views/images/site-features-icon3.png" alt="" /><br />
            <p>MVC tend to keep things small and simple. MVC gives us robustness and scalability.&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <strong>MVC Framework</strong>
            </li>
			
        	<li>
            <img src="<?php echo URL;?>views/images/site-features-icon1.png" alt="" /><br />
            <p>We simplify website management in order to allow business owners and non-technical personnel to handle websites on the fly. </p>
            <strong>Content Management Solution</strong>
            </li>
            
            <li class="last">
            <img src="<?php echo URL;?>views/images/site-features-icon2.png" alt="" /><br />
            <p>Do you need a shopping cart system? We can help. Our e-commerce services are designed for your specific needs.</p>
            <strong>Ecommerce Solution</strong>
            </li>
            
           
        
        </ul>
        
        <!-- <div class="site_features_hline"></div> -->

</div>	
<!-- end how it works -->



<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
</script>
    
<!-- main menu -->
<script type="text/javascript" src="<?php echo URL;?>views/js/mainmenu/scripts.js"></script>


<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>


<!-- REVOLUTION jQuery KenBurn Slider  -->
<script type="text/javascript">

				var tpj=jQuery;
				tpj.noConflict();

				tpj(document).ready(function() {

				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;

					tpj('.fullwidthbanner').revolution(
						{
							delay:9000,
							startwidth:1000,
							startheight:520,

							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:4,

							hideThumbs:0,
							navigationType:"bullet",				// bullet, thumb, none
							navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

							navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


							navigationHAlign:"left",				// Vertical Align top,center,bottom
							navigationVAlign:"bottom",					// Horizontal Align left,center,right
							navigationHOffset:30,
							navigationVOffset:30,

							soloArrowLeftHalign:"left",
							soloArrowLeftValign:"center",
							soloArrowLeftHOffset:20,
							soloArrowLeftVOffset:0,

							soloArrowRightHalign:"right",
							soloArrowRightValign:"center",
							soloArrowRightHOffset:20,
							soloArrowRightVOffset:0,

							touchenabled:"on",						// Enable Swipe Function : on/off


							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

							hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
							hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
							hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


							fullWidth:"on",

							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

						});




			});
			</script>


<?php include HOME . DS . 'includes' . DS . 'footer.inc.php'; ?>