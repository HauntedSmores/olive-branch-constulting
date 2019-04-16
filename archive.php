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
				<header class="header">
					<h1 class="entry-title"><?php single_term_title(); ?></h1>
					<div class="archive-meta">
						<?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
				</header>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
			</main>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>