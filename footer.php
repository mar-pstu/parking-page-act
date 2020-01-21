<?php



namespace parking_page_act;



if ( ! defined( 'ABSPATH' ) ) { exit; };



?>

			</main>
			<footer class="wrapper__item wrapper__item--footer footer">
				<div class="container clearfix">
					<p class="copyright">
						<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
					</p>
					<p class="developer">
						<a href="https://cct.pstu.edu"><?php _e( 'ЦКТ ПГТУ', PARKING_PAGE_ACT_TEXTDOMAIN ); ?></a>
					</p>
				</div>
			</footer>
			<?php wp_footer(); ?>
		</div>
	</body>
</html>