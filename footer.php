	</div><!-- end wrapper -->
        <!-- full width footer if necessary -->
	<div id="footer">
	
		<div id="footer-wrapper" class="container_12">
		
			<div id="footerContent" class="grid_12">
                            <div class="grid_9 alpha">
				<p>
					Copyright &copy; <?php echo date("Y");?> &bull; <a href="<?php echo get_option('home'); ?>/">Napier Partnership Limited</a> &bull; All Rights Reserved
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>
                            </div>
                            <div class="grid_3 omega" id="prca">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/prca.gif" alt="PRCA Member" />
                            </div>
			</div><!-- end footerContent -->
                        
                        <div class="clear"></div>	
		</div><!-- end container -->
		
	
		<div class="clear"></div>
		
	</div><!-- end footer -->

<?php wp_footer(); ?>

</div><!-- end page -->
	
</body>
</html>