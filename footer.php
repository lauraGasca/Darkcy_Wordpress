<?php 

	novalite_bottom_content();
	do_action( 'novalite_socials' ); 
	
?>
    
<footer id="footer">
	<div class="container">
		<div class="row" >
             
			<div class="span12 copyright" >
            
                <p>
                    <?php _e('Copyright','novalite'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?>

                </p>
			
            </div>
                
		</div>
	</div>
</footer>
    
<div id="back-to-top">
<a href="#" style=""><i class="icon-chevron-up"></i></a> 
</div>
    
<?php wp_footer() ?>  
 
</body>

</html>