<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

?>

<div class="clear"></div>

<!-- BEGIN .footer -->
<div class="footer radius-top shadow">

	<?php if ( is_active_sidebar( 'footer' ) ) { ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .footer-widgets -->
		<div class="footer-widgets">

			<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer' ) ) : ?>
			<?php endif; ?>

		<!-- END .footer-widgets -->
		</div>

	<!-- END .row -->
	</div>

	<?php } ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .footer-information -->
		<div class="footer-information">

			<!-- BEGIN .footer-content -->
			<div class="footer-content">

				<div class="align-left">
          <p>Copyright &copy; <?php echo date('Y'); ?> · All Rights Reserved · <?php bloginfo('name'); ?> · 当前共发布了<?php $count_posts = wp_count_posts('post', ''); echo $count_posts->publish; ?>篇文章</p>
          <p><a href="https://github.com/Yakima-Teng/natural-lite" rel="nofollow">Theme Source Code</a> &middot; <a href="<?php bloginfo( 'rss2_url' ); ?>">RSS Feed</a> &middot; <a href="<?php bloginfo('home') ?>/sitemap.xml">Sitemap</a> &middot; <?php wp_loginout(); ?></p>
				</div>

				<?php if ( has_nav_menu( 'social-menu' ) ) { ?>

				<div class="align-right">

					<?php wp_nav_menu( array(
						'theme_location' => 'social-menu',
						'title_li' => '',
						'depth' => 1,
						'container_class' => 'social-menu',
						'menu_class'      => 'social-icons',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						)
					); ?>

				</div>

				<?php } ?>

			<!-- END .footer-content -->
			</div>

		<!-- END .footer-information -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .footer -->
</div>

<!-- END .container -->
</div>

<!-- END #wrap -->
</div>

<?php wp_footer(); ?>

</body>
</html>
