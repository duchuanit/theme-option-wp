<?php get_header();?>
<?php 
$category01 = get_option('sbc_category01');$cat01=get_cat_ID($category01);
$number_cat01 = get_option('sbc_number_cat01');
$category02 = get_option('sbc_category02');$cat02=get_cat_ID($category02);
$number_cat02 = get_option('sbc_number_cat02');
$category03 = get_option('sbc_category03');$cat03=get_cat_ID($category03);
$number_cat03 = get_option('sbc_number_cat03');
$cat_text_1 = get_option('sbc_text_cat_1');
$cat_text_2 = get_option('sbc_text_cat_2');
$cat_text_3 = get_option('sbc_text_cat_3');
?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url');?>/img/img-top1.jpg">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url');?>/img/img-top2.jpg">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url');?>/img/img-top3.jpg">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">
<div class="row ma-5">
	<div class="col-md-12"></div>
</div>	
</div>

<div class="container">
	<div class="row ma-5">&nbsp;</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="text-center ma mo-title ">
		 <h4><i class="fas fa-feather"></i>&nbsp;<?php echo $cat_text_1;?></h4>	
		</div>		
	</div>
</div>

<div class="row ma-5"></div>

<div class="row">
<?php query_posts(array( 'cat'=>$cat01,'posts_per_page' =>$number_cat01,'orderby'=>'date','order'=>'DESC', ));
while(have_posts()):the_post();?>	
	<div class="col-md-4 box-home-a">
	<a href="<?php the_permalink();?>"><img class="img-center" src="<?php bloginfo('template_url'); ?>/img/loading.gif" data-src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" /></a>
	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	<div class="row">
		<div class="col-6">
		<small class="be">
	    <i class="fal fa-female">&nbsp;</i><?php echo $category01; ?>
	    </small>
		</div> 
		<div class="col-6 text-right">
			<small class="be"><i class="fal fa-alarm-clock">&nbsp;</i> <?php echo get_the_date(); ?></small>
		</div>
	</div>
     
	<div class="home-short-title"><?php the_content_rss('&hellip;',false,'',30);?></div>
	</div>
<?php endwhile;?>
</div>
</div>

<div class="container">
<div class="row ma-20"></div>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 box-home-b">
		<div class="text-center"><?php $line_1 = get_option('sbc_line_1');echo $line_1;?></div>
	</div>
	<div class="col-md-1"></div>
</div>
<div class="row ma-20"></div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="text-center ma mo-title ">
		 <h4><i class="fas fa-fire"></i>&nbsp;<?php echo $cat_text_2;?></h4>	
		</div>		
	</div>
</div>
<div class="row ma-5"></div>
<div class="row">
<?php query_posts(array( 'cat'=>$cat02,'posts_per_page' =>$number_cat02,'orderby'=>'date','order'=>'DESC', ));while(have_posts()):the_post();?> 
	<div class="col-md-6 box-home-c">
		<a href="<?php the_permalink();?>"><img class="img-center" src="<?php bloginfo('template_url'); ?>/img/loading.gif" data-src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" /></a>
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<div class="row">
		<div class="col-6">
		<small class="be">
	    <i class="fal fa-female">&nbsp;</i><?php echo $category02; ?>
	    </small>
		</div> 
		<div class="col-6 text-right">
			<small class="be"><i class="fal fa-alarm-clock">&nbsp;</i> <?php echo get_the_date(); ?></small>
		</div>
	</div>
		<div class="home-short-title"><?php the_content_rss('&hellip;',false,'',30);?></div>
	</div>	
	<?php endwhile;?>
</div>

</div>

<div class="container">
<div class="row ma-20">
	<div class="col-md-1"></div>
	<div class="col-md-10 box-home-d">
		<div class="text-center"><?php $line_2 = get_option('sbc_line_2');echo $line_2;?></div>
	</div>
	<div class="col-md-1"></div>
</div>
</div>


<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="text-center ma mo-title ">
		 <h4><i class="fas fa-street-view"></i>&nbsp;<?php echo $cat_text_3;?></h4>	
		</div>		
	</div>
</div>
<div class="row ma-5"></div>
<div class="row">
	<?php query_posts(array( 'cat'=>$cat03,'posts_per_page' =>$number_cat03,'orderby'=>'date','order'=>'DESC', ));while(have_posts()):the_post();?> 
	<div class="col-md-4 box-home-a">
		<a href="<?php the_permalink();?>"><img class="img-center" src="<?php bloginfo('template_url'); ?>/img/loading.gif" data-src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" /></a>	
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<div class="row">
		<div class="col-6">
		<small class="be">
	    <i class="fal fa-female">&nbsp;</i><?php echo $category03; ?>
	    </small>
		</div> 
		<div class="col-6 text-right">
			<small class="be"><i class="fal fa-alarm-clock">&nbsp;</i> <?php echo get_the_date(); ?></small>
		</div>
	</div>
		<div class="home-short-title"><?php the_content_rss('&hellip;',false,'',30);?></div>
	</div>
<?php endwhile;?>
</div>	
</div>

<div class="container">
<div class="row ma-20">
	<div class="col-md-1"></div>
	<div class="col-md-10 box-home-d">
		<div class="text-center"><?php $line_3 = get_option('sbc_line_3');echo $line_3;?></div>
	</div>
	<div class="col-md-1"></div>
</div>
</div>

<?php get_footer(); ?>
