</div><!-- end wrapper -->
</div><!-- end wrapper-container -->
<!-- full width footer if necessary -->
<div id="footer">

    <div id="footer-wrapper" class="container_12">

        <div id="footerContent" class="grid_12">
            <div class="grid_9 alpha">
                <p>
                    Copyright &copy; <?php echo date("Y"); ?> &bull; <a href="<?php echo get_option('home'); ?>/">Napier Partnership Limited</a> &bull; All Rights Reserved &bull; <a href="<?php echo get_option('home'); ?>/go/privacy-and-cookie-information">Privacy &amp; Cookie Policy</a>
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
<!-- ClickTale Bottom part -->
<div id="ClickTaleDiv" style="display: none;"></div>
<script type="text/javascript">
    if(document.location.protocol!='https:')
        document.write(unescape("%3Cscript%20src='http://s.clicktale.net/WRe0.js'%20type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    if(typeof ClickTale=='function') ClickTale(12315,0.18,"www14");
</script>
<!-- ClickTale end of Bottom part -->

<script type="text/javascript">
    adroll_adv_id = "74GPLA46NNHEFIZ5VLSJLX";
    adroll_pix_id = "TTCPVM46HNFD5E75FGOKUT";
    (function () {
        var oldonload = window.onload;
        window.onload = function(){
            __adroll_loaded=true;
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            if(oldonload){oldonload()}};
    }());
</script>



</body>
</html>