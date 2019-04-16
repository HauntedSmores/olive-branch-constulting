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
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="header">
						<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
					</header>
					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</div>
				</article>
				<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
				<?php endwhile; endif; ?>
			</main>

			<?php get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
