	</div><!-- end wrapper -->
	
	<!-- Placing the footer div outside the grid system allows for a full width footer -->
	<div id="footer">
	
		<!-- The class "container_12" restricts the grid to 12 columns and a total of 960px wide -->
		<div id="footer-wrapper" class="container_12">
		
			<div id="footerContent" class="grid_12">
				<p>
					Copyright &copy; <?php echo date("Y");?> &bull; <a href="<?php echo get_option('home'); ?>/">Napier Partnership Limited</a> &bull; All Rights Reserved
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>
			</div><!-- end footerContent -->
                        <div class="clear"></div>	
		</div><!-- end container -->
		
		<!-- This clears all floats -->
		<div class="clear">&nbsp;</div>
		
	</div><!-- end footer -->

<?php wp_footer(); ?>

</div><!-- end page -->
	
</body>
</html>