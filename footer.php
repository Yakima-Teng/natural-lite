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
          <p>滕运锋，英文名Yakima Teng，2013年毕业于沈阳药科大学-药学(食品药学方向)专业</p>
          <p>博客主要记录了一些生活琐碎、思考感悟，以及IT方面的一些技术文章</p>
          <p>主题基于<a href="http://organicthemes.com/" rel="nofollow">Natural Lite</a>修改而来 &middot; <a href="<?php bloginfo( 'rss2_url' ); ?>">RSS Feed</a> &middot; <a href="http://www.orzzone.com/blog/sitemap.xml">Sitemap</a> &middot; <?php wp_loginout(); ?></p>
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
