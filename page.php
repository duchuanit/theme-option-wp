<?php get_header(); ?>

<div class="container">
	<div class="row ma-20"></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
<div class="row single">
	<div class="col-md-9">
	<h1><?php the_title(); ?></h1>
	<small><?php the_date('j F, Y'); ?></small> <?php setPostViews(get_the_ID());?>
	<div class="row ma-10"></div>
	<div>
		<?php the_content(); ?>
	</div>
	<div class="row ma-20"></div>
		
	</div>
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php endwhile; endif; ?>

<div class="row ma-20"></div>
</div>
<?php get_footer(); ?>