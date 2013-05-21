<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="template-front-page top template-full-page">
	<div class="template-front-page logo">
		<img src="http://tmp.appmobi.com/wp-content/uploads/2013/05/logo_cloudservices.png" width="303" height="74" />
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
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
