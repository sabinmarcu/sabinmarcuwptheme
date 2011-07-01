	</section>
	<aside>
			<?php wp_nav_menu( array( 'menu' => 'Aside Menu',  'link_after' => '<span class="arrow"></span>' ) ) ?>
	</aside>
</section>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
