<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TownsvilleJazz
 */

?>

	<footer id="colophon" class="site-footer">

		<h2 class="socials"> Check out our social media! </h2>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				)
			);
			?>

		<div class="site-info">			
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'townsvillejazz' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'townsvillejazz' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'townsvillejazz' ), 'townsvillejazz', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->

		<div class="site-contact">
			<h2> Our Contacts! </h2>
			<p> Address: 334 Flinders Street, Townsville, QLD, Australia 4812</p>
			    Phone: 0431 618 618 
			    Email: townsvillejazz@icloud.com 
			</p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
