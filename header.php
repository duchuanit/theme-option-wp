<!DOCTYPE html>
<html>
<head>
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.css">
<link href="<?php bloginfo('template_url');?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/all.css">
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.png">
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
window.addEventListener('load', function(){
    var allimages= document.getElementsByTagName('img');
    for (var i=0; i<allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
}, false)
</script>
<style type="text/css">
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 9999;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<?php $google_anna = get_option('sbc_google_ana');echo $google_anna;?>
<?php $facebook = get_option('sbc_facebook');echo $facebook;?>
<?php $css = get_option('sbc_css');echo $css;?>
</head>
<body>

<div class="container-fluid bg-top">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
			<div class="header_zone">
				<div class="row ma-10"></div>
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				<img class="mx-auto d-block img-center" src="<?php bloginfo('template_url');?>/img/logo.png"> 
				</div>
				<div class="col-2"></div>
				</div>
			</div>
			</div>

		</div>
	</div>
</div>


<!-- Top menu -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom p-0" id="myHeader">
<div class="container">
<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<?php
wp_nav_menu( array(
'menu'=> 'primary',
'theme_location'    => 'primary',
'depth'             => 2,
'container'         => 'div',
'container_class'   => 'collapse navbar-collapse',
'container_id'      => 'navbarContent',
'menu_class'        => 'navbar-nav mr-auto',
'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
'walker'            => new wp_bootstrap_navwalker())
);
?> 
</div>   

</nav>   