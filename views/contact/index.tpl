<?php include HOME . DS . 'includes' . DS . 'header.inc.php'; ?>



<!-- Content
======================================= -->  

<!-- content left area -->
<div id="content">
	<div class="container">
    
    	<div class="content-fullwidth">
        	
			<div id="content_area">
        	
            <div class="one_half">
            <p>Feel free to talk to our online representative at any time.</p>
            
            <p><br />Please be patient while waiting for response. (24/7 Support!)<br /><br />
			<strong>E-mail: <a href="mailto:<?php echo SUPPORT_EMAIL;?>"><?php echo SUPPORT_EMAIL;?></a></strong><br />
            <strong>Phone General Inquiries: <?php echo TELEPHONE;?></strong></p>
			
            <div class="mar_top4"></div>
            
            
            <div class="address-info">
                    <h4>Address Info</h4>
                        <ul>
                        <li>
                        <strong>ZunaWeb</strong><br />
                        <?php echo str_replace('<br/>', ' ', COMPANY_ADDRESS);?><br/><br/>
                        Telephone: <?php echo TELEPHONE;?><br />
                        <!--USA Telephone: <?php echo TELEPHONEUSA;?><br />-->
						<!--<?php echo TELEPHONE2;?>-->
                        <!--FAX: <?php echo FAX;?><br />-->
                        E-mail: <a href="mailto:<?php echo SUPPORT_EMAIL;?>"><?php echo SUPPORT_EMAIL;?></a><br />
                        Website: <a href="www.zunaweb.com">www.zunaweb.com</a>
                        </li>
                        <li>
                        <br />
                        <strong>Business Hours</strong>
                        <p>Monday - Friday 9am to 6pm</p>
                        <p>Sunday (national holidays) - Closed</p>
                        </li>
                    </ul>
                </div>
            </div>
              
            
            <div class="one_half last">	            
            
            <h4>Contact Form</h4>
		
					<form action="<?php echo URL?>contact/send/" method="POST" id="sendemail" name="sendemail">
					
						<fieldset>
						
						<?php if($errors) { ?> 
						
                        <div class="error">
                            <div class="message-box-wrap">
									<?php foreach ($errors as $value) {
											echo "$value<br />\n";
										}?>
							</div>
                        </div>
						
						<?php } ?>
						<?php if($success) { ?> 
						
                        <div class="success">
                            <div class="message-box-wrap">
                               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
                        </div>
						
						<?php } ?>
						<label for="name" class="blocklabel">Your Name*</label>
						<p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="your_name" class="input_bg" type="text" id="your_name" value='<?php if (isset($data)) echo $data['your_name']; ?>'/></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($data)) echo $data['email']; ?>' /></p>
						
						
						<label for="website" class="blocklabel">Website</label>
						<p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($data))  echo $data['website']; ?>"/></p>
						
						
						<label for="message" class="blocklabel">Your Message*</label>
						<p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($data)) echo $data['message']; ?></textarea></p>
						
						
						
						<div class="clearfix"></div>
						
						<input type="button" onclick="myFunction()" value="Send Message">
						
						<?php if($success) { ?> 
						
                        <div class="success">
                            <div class="message-box-wrap">
                               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
                        </div>
						
						<?php } ?>
						
						</fieldset>
						
						</form> 
			</div>
            
            <div class="clearfix"></div>
            <div class="mar_top1"></div>
            <!--
            <div class="one_full">
            
            <h4>Find the Address</h4>
				<iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
            
            </div>
			-->
    
        
</div>

        </div><!-- end full width page -->

    
    </div>
</div>
<script>
function myFunction()
{
document.getElementById("sendemail").submit();
}
</script>
<?php include HOME . DS . 'includes' . DS . 'footer.inc.php'; ?>