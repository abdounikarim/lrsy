<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boston
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<?php do_action('boston_before_footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php do_action('boston_footer_start'); ?>

		<div class="container">
			<div class="site-info">
				<p>
					<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. Tous droits réservés.', 'boston' ), date('Y'), get_bloginfo( 'name' ) ); ?>
				</p>
			</div><!-- .site-info -->
			<div class="theme-info">
				<span><a href="http://lrsy.abdounikarim.com/mentions-legales/">Mentions légales</a></span> - 
				<?php if (is_user_logged_in()) : ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>">Administration <i class="fa fa-unlock" aria-hidden="true"></i></a>
				<?php else : ?> <a href="<?php echo wp_login_url(get_permalink()); ?>">Administration <i class="fa fa-lock" aria-hidden="true"></i></a>
				<?php endif;?>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
