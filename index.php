<?php get_header(); ?>

	<div class="content">

		<div class="main clearfix" role="main">

			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

				<header class="article-header">
					<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>

				<section class="entry-content clearfix">
					<?php the_content(); ?>
				</section>

				<footer class="article-footer">
					<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'lillehummer' ) . '</span> ', ', ', '' ); ?></p>
				</footer>

			</article>

			<?php endwhile; ?>

			<?php if ( function_exists( 'bones_page_navi' ) ) bones_page_navi(); ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>