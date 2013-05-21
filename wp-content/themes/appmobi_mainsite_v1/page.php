<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="template-front-page top template-full-page">
	<div class="template-front-page logo">
		<a href="http://appmobi.com/"><img src="http://tmp.appmobi.com/wp-content/uploads/2013/05/logo_cloudservices.png" width="303" height="74" /></a>
	</div>
	<div class="template-front-page blurb">
		<span>Cross platform push messaging, app promotion, in-app purchasing, integrated analytics and more, for all applications and deployed in any environment.</span>
	</div>
	<div class="clear"></div>
</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
