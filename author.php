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
					<?php the_post(); ?>
					<h1 class="entry-title author"><?php the_author_link(); ?></h1>
					<div class="archive-meta">
						<?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?>
					</div>
					<?php rewind_posts(); ?>
				</header>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
			</main>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
