
<div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon" style="right: 10px; top: 20%;">
  <a href="tel:0123456789" title="Liên hệ nhanh">
  <div class="quick-alo-ph-circle"></div>
  <div class="quick-alo-ph-circle-fill"></div>
  <div class="quick-alo-ph-img-circle"></div>
  </a>
</div>


<!-- <div class="container-fluid bg_foot">
<div class="row ma-2">&nbsp;</div>

</div> -->
<div class="container-fluid">

	<div class="row page_footer">
		<div class="col-md-12">
			<div class="container">
				<div class="row pad20">
					<div class="col-md-6">
					<img src="<?php bloginfo('template_url');?>/img/logo_bot.png">
					<br><br/>
					<p>
					<?php $vy_about_us = get_option('sbc_about_us');echo $vy_about_us;?>
					</p>
						
					</div>
					<div class="col-md-3">
					<h3>Follow me</h3>
					<ul>
					<li><i class="fab fa-facebook"></i>&nbsp;<a target="_blank" href="<?php $fb_id = get_option('sbc_fb_id');echo $fb_id;?>">Facebook</a></li>
					<li class="ma-5"></li>
					<li><i class="fab fa-youtube"></i>&nbsp;<a target="_blank" href="<?php $youtube_id = get_option('sbc_youtube_id');echo $youtube_id;?>">Youtube</a></li>
					<li class="ma-5"></li>
					<li><i class="fab fa-instagram"></i>&nbsp;<a target="_blank" href="<?php $inst_id = get_option('sbc_inst_id');echo $inst_id;?>">Instagram</a></li>
					</ul>
					</div>
					<div class="col-md-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Right') ) : ?><?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">
						<?php $vy_footer = get_option('sbc_footer');echo $vy_footer;?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > 150) {header.classList.add("sticky");} 
  else {header.classList.remove("sticky");}
}
</script>

</body>
</html>