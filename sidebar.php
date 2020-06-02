<div class="container sidebar hid">
<h2 style="font-size: 1.4rem;">Bài viết nổi bật</h2>
<div class="row ma-5"></div>
<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-5">
			<a href="#">
			<img class="img-center" src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
		<div class="col-7">
		<h3 style="font-size: 1.2rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
		</div>
	</div>
	<div class="row ma-5"></div>
<?php endwhile; endif;wp_reset_query();?>
</div>
<div class="row ma-10"></div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Side Bar') ) : ?>
<?php endif; ?>	