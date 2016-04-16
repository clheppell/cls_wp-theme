<?php /* Template Name: Single Column Page Template with Title */ ?>

	<?php get_header(); ?>
    <?php get_template_part( 'pageheader' ); ?>
      
      <!-- Page Content -->
      <div class="container">
      <div class="row">

        <div class="col-md-12">
        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<div id="post-<?php the_ID(); ?>" <?php post_class('post blog-post'); ?>>
            			<h1 class="chesterRed"><?php the_title(); ?></h1>

				<div class="entry clearfix"><?php the_content(); ?></div>

			</div>
            
	  <?php endwhile; endif; ?>

        </div>

    </div>
    </div>
    <!-- Content ENDS -->

	<?php get_footer(); ?>