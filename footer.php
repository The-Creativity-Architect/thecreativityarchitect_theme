			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
			    <?php
				    printf( '<small class="copyright">' . __( '&copy; %1$s Copyright %2$s. Powered by <a href="%3$s" title="WordPress">WordPress</a> &amp; <a href="%4$s" title="THEMENAME">THEMENAME</a>.', 'THEMENAME' ) . '</small>',
				    	date( 'Y'),
				    	esc_html( get_the_author_meta( $field = 'nickname', $user_id = false ) ),
				    	'//wordpress.org',
				    	'//THEMENAME.com'
					);
				?>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
