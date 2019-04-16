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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<?php if ( is_singular() ) {
echo '<h1 class="entry-title">';
} else {
echo '<h2 class="entry-title">';
} ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
						rel="bookmark"><?php the_title(); ?></a>
					<?php if ( is_singular() ) {
echo '</h1>';
} else {
echo '</h2>';
} ?> <?php edit_post_link(); ?>
					<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
				</header>
				<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
				<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
			</article>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
