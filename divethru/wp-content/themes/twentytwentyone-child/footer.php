
	   <footer>
    <section class="main-footer">
        <div class="container">
        <div class="dFlx">
            <div class="f-left">
            <div class="footerlogo">
                <!-- <a href="#"><img src="<?php //echo  get_stylesheet_directory_uri();?>/images/footer-logo.png" alt=""/></a> -->
               
               <a href="<?php echo get_home_url(); ?>"><img src="<?php  the_field('footer_logo', 'options'); ?>" alt=""> </a>
                </div>
                <div class="footer-link">
                <!-- <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy</a></li>
                    </ul> -->
                     <?php 
            			wp_nav_menu( array(
              				'theme_location'  => 'footer-nav',
              				'fallback_cb'     => false
              
            			) );
          			?>
                </div>

                <div class="footer-link">
                <!-- <ul>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Support</a></li>
                    </ul> -->
                    <?php 
            			wp_nav_menu( array(
              				'theme_location'  => 'footer-nav2',
              				'fallback_cb'     => false
              
            			) );
          			?>
                </div>
            </div>
            <div class="f-right">
            <div class="f-right-text1">
               <p><img src="<?php echo  get_stylesheet_directory_uri();?>/images/call.png"/>
                <span>If you’re experiencing an emergency and need immediate help, call 911 or
go to the nearest emergency room.</span></p> 
                
                </div>
                <div class="f-right-text2">
                    <div class="f-right-text2-inner">
                    <h6>Suicide Prevention Lifeline</h6>
                       <a href="tel:+1-800-273-8255">+1-800-273-8255</a>
                    </div>
                    <div class="f-right-text2-inner">
                    <h6>Crisis Text Line</h6>
                       <p>Text HOME to 741741</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </footer>
    
    <!-- Back to top button -->
<a id="button"></a>
    
 
<?php wp_footer(); ?>

</body>
</html>
