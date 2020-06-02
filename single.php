<?php get_header(); ?>

<div class="container">
	<div class="row ma-20"></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
<div class="row single">
	<div class="col-md-9">
	<h1><?php the_title(); ?></h1>
	<small><i class="fal fa-alarm-clock">&nbsp;</i><?php the_date('j F, Y'); ?></small> <?php setPostViews(get_the_ID());?>
	<div class="row ma-10"></div>
	<div>
		<?php the_content(); ?>
	</div>
	<div class="row ma-20"></div>
	<div class="row" style="padding-bottom: 10px;padding-top: 10px;border-top:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6 ">
		<div class="col-3">
			<img class="img-center" src="<?php bloginfo('template_url');?>/img/author.png">
		</div>
		<div class="col-9">
			<p class="ma-10"></p>
			
			<?php $about_single = get_option('sbc_about_single');echo $about_single;?>
		</div>
	</div>			
	
	</div>
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php endwhile; endif; ?>

<div class="row ma-20"></div>
</div>
<?php get_footer(); ?>