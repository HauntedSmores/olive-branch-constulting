<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">

		<?php get_header(); ?>

		<div id="container">

			<main id="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
				<?php endwhile; endif; ?>
				<footer class="footer">
					<?php get_template_part( 'nav', 'below-single' ); ?>
				</footer>
			</main>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
