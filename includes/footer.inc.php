
<div id="footer">
	<div class="mar_top3"></div>

<div class="footer_top_graphic"></div>
<div class="footer_columns">

	<div class="container">
		<!--
        <div class="one_fourth">
        <span class="footer_logo"><img src="<?php echo URL .'/views/';?>images/footer-logo.png" alt="" /></span>
            <ul class="address-liste">
            	<li class="icon1"><?php echo COMPANY_ADDRESS;?></li>
                <li class="icon2"><?php echo TELEPHONE;?></li>
                <li class="worldmap"></li>
            </ul>
        </div><!-- end address info -->
        <!--
        <div class="one_fourth">
        	<h2>Useful links</h2>
                    <ul class="arrows-list-one">
                        <li><a href="#">Our History</a></li>
                        <li><a href="#">Professional Research</a></li>
                        <li><a href="#">Our Development</a></li>
                        <li><a href="#">Partnership With Us</a></li>
                        <li><a href="#">Company Carreer</a></li>
                        <li><a href="#">New Technology</a></li>
                        <li><a href="#">Client Testimonials</a></li>
                    </ul> 
             
            
        
        </div><!-- end section --> 
        <!--
        <div class="one_fourth">
        	<h2>Get in touch</h2>
                	
                <ul class="socials-list">
                <li><a href="#" title="facebook"><img src="<?php echo URL .'/views/';?>images/footer-socials-01.png" alt="" />Connect with facebook</a></li>
                <li><a href="#" title="twitter"><img src="<?php echo URL .'/views/';?>images/footer-socials-02.png" alt="" />Follow on twitter</a></li>
                <li><a href="#" title="google plus"><img src="<?php echo URL .'/views/';?>images/footer-socials-03.png" alt="" />Sharing on Google+</a></li>
     			<li><a href="#" title="you tube"><img src="<?php echo URL .'/views/';?>images/footer-socials-04.png" alt="" />Share videos on YouTube</a></li>
                <li><a href="#" title="linked in"><img src="<?php echo URL .'/views/';?>images/footer-socials-05.png" alt="" />Connect with linkedin</a></li>
                <li><a href="#" title="rss"><img src="<?php echo URL .'/views/';?>images/footer-socials-06.png" alt="" />Subscribe rss feed</a></li>
                </ul>
        </div><!-- end social links --> 
        <!--
        <div class="one_fourth last">
        	<h2>Flickr photos</h2>
        	<div id="flickr_badge_wrapper">
            	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=h&amp;source=user&amp;user=93382411%40N07"></script>
            
            </div>
        
        </div><!-- end flickr --> 

</div>
  
</div><!-- end footer all columns --> 
 	
    <div class="up_arrow"></div>
	<div class="copyright_info">
    
    	<div class="container">
        
    	<div class="one_half"><b>Copyright &#169; <?php echo date('Y');?> ZunaWeb.com. All rights reserved</b></div>
		
        <div class="one_half last">
        	<span><a href="<?php echo URL;?>terms_of_services">Terms of Service</a> | <a href="<?php echo URL;?>privacy_policy">Privacy Policy</a></span>
                    
        </div>
        
		</div>
        
    </div><!-- end copyright info -->  

</div>
 
    
    
    
<!-- style switcher -->
<script type="text/javascript" src="<?php echo URL .'/views/';?>js/style-switcher/styleswitcher.js"></script>
<!-- end style switcher -->


    
<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
</div>

    
<!-- main menu -->
<script type="text/javascript" src="<?php echo URL .'/views/';?>js/mainmenu/scripts.js"></script>


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



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123737202-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123737202-1');
</script>


</body>
</html>
