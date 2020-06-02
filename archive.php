<?php get_header(); ?>
<!-- Bat dau content-->	

		
<div class="container">
<div class="row ma-20"></div>
<?php echo category_description( $category_id );?>
	<div class="row">
	<div class="col-md-8">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="row category">
		<div class="col-md-4">
			<a href="<?php the_permalink() ?>">
			<img class="img-center" src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-md-8">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<small class="be"><?php echo get_the_date(); ?></small>
			<p><?php the_content_rss('',false,'',50);?></p>
		<br><br/>
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
			<a href="<?php the_permalink() ?>" class="btn btn-info"><i class="fab fa-fly">&nbsp;</i>Đọc tiếp</a>
			</div>
		</div>
		</div>
	</div>
	<div class="row ma-10"></div>
<?php endwhile; ?>
<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
<?php endif; ?>

	</div>
	<div class="col-md-1" style="border-right: 1px solid #cdcdcd;"></div>
	<div class="col-md-3">		
    <?php get_sidebar(); ?>
	</div>
		
	</div>

<div class="row ma-20"></div>
</div>

<?php get_footer(); ?>