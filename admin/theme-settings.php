<?php seems_utf8( $str ); ?>
<?php

add_action('init','SaoBien_panel');

if (!function_exists('SaoBien_panel')) {
function SaoBien_panel(){

//Theme Shortname
$shortname = "sbc";

//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');

//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Chọn Trang-Page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Chọn Category:");

//Sample Array for demo purposes
//$sample_array = array("1","2","3","4","5");//So thu tu trong listbox
$sample_array = array("3","6","9");//So thu tu trong listbox
$sample_array2 = array("2","4","6");//So thu tu trong listbox
$truefalse_array = array("Yes","No");// True hoac False trong listbox

//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';

/* Create The Custom Site Options Panel */

$options = array(); // do not delete this line - sky will fall

	

//Cai dat chung - General Opitions
		$options[] = array( "name" => __('Cài đặt chung','framework_localize'),
			"type" => "heading");
		
				
		//Text Area Google
		$options[] = array( "name" => __('Google Analytics Code','framework_localize'),
			"desc" => "Copy code Google Analytics Code vào đây.",
			"id" => $shortname."_google_ana",
			"std" => "",
			"type" => "textarea");
			

		//Text Area Facebook		
		$options[] = array( "name" => __('Facebook','framework_localize'),
			"desc" => "Thêm code Facebook vào website của bạn.",
			"id" => $shortname."_facebook",
			"std" => "",
			"type" => "textarea");
			
		//Text Area CSS	
		$options[] = array( "name" => __('Custom CSS','framework_localize'),
			"desc" => "Thêm mã lệnh css vào trong giao diện của bạn.",
			"id" => $shortname."_css",
			"std" => "",
			"type" => "textarea");
			
		

//Chon Social
$options[] = array( "name" => __('Social ID','framework_localize'),
			"type" => "heading");
			
	//Facebook Link
	$options[] = array( "name" => __('Facebook ID','framework_localize'),
			"desc" => "Facebook.",
			"id" => $shortname."_fb_id",
			"std" => "",
			"type" => "text");
			
	//Twitter Link
	$options[] = array( "name" => __('Instagram ID','framework_localize'),
			"desc" => "Instagram.",
			"id" => $shortname."_inst_id",
			"std" => "",
			"type" => "text");
			
	//Google Link
	$options[] = array( "name" => __('Youtube ID','framework_localize'),
			"desc" => "Youtube ID.",
			"id" => $shortname."_youtube_id",
			"std" => "",
			"type" => "text");

//Chon Categories
$options[] = array( "name" => __('Chuyên mục','framework_localize'),
			"type" => "heading");
			
			$options[] = array( "name" => __('Text Chuyên mục 1','framework_localize'),
			"desc" => "Text chuyên mục 1.",
			"id" => $shortname."_text_cat_1",
			"std" => "",
			"type" => "text");

			
			//Box 01
			$options[] = array( "name" => __('Category Box 1','framework_localize'),
			"desc" => __('Chọn chuyên mục website.','framework_localize'),
			"id" => $shortname."_category01",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
			
			//
			$options[] = array( "name" => __('Số bài viết hiển thị','framework_localize'),
			"desc" => __('Số bài viết hiển thị.','framework_localize'),
			"id" => $shortname."_number_cat01",
			"std" => "1",
			"type" => "select",
			"options" => $sample_array);

			$options[] = array( "name" => __('Text Chuyên mục 2','framework_localize'),
			"desc" => "Text chuyên mục 2.",
			"id" => $shortname."_text_cat_2",
			"std" => "",
			"type" => "text");
			
			//Box 02
			$options[] = array( "name" => __('Category Box 2','framework_localize'),
			"desc" => __('Chọn chuyên mục website.','framework_localize'),
			"id" => $shortname."_category02",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);	
			//		
			$options[] = array( "name" => __('Số bài viết hiển thị','framework_localize'),
			"desc" => __('Số bài viết hiển thị.','framework_localize'),
			"id" => $shortname."_number_cat02",
			"std" => "1",
			"type" => "select",
			"options" => $sample_array2);

			$options[] = array( "name" => __('Text Chuyên mục 3','framework_localize'),
			"desc" => "Text chuyên mục 3.",
			"id" => $shortname."_text_cat_3",
			"std" => "",
			"type" => "text");
			
			//Box 03
			$options[] = array( "name" => __('Category Box 3','framework_localize'),
			"desc" => __('Chọn chuyên mục website.','framework_localize'),
			"id" => $shortname."_category03",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
			
			//
			$options[] = array( "name" => __('Số bài viết hiển thị','framework_localize'),
			"desc" => __('Số bài viết hiển thị.','framework_localize'),
			"id" => $shortname."number_cat03",
			"std" => "1",
			"type" => "select",
			"options" => $sample_array);
			
//Notice Copyright
$options[] = array( "name" => __('Thông báo','framework_localize'),
			"type" => "heading");
			
		//Dong thu nhat	
		$options[] = array( "name" => __('Dòng thứ nhất','framework_localize'),
			"desc" => "Nội dung dòng thứ nhất.",
			"id" => $shortname."_line_1",
			"std" => "",
			"type" => "textarea");
		//Dong thu hai
		$options[] = array( "name" => __('Dòng thứ hai','framework_localize'),
			"desc" => "Nội dung dòng thứ hai.",
			"id" => $shortname."_line_2",
			"std" => "",
			"type" => "textarea");
		//Dong thu ba
		$options[] = array( "name" => __('Dòng thứ ba','framework_localize'),
			"desc" => "Nội dung dòng thứ ba.",
			"id" => $shortname."_line_3",
			"std" => "",
			"type" => "textarea");
						
			

//Footer Copyright
$options[] = array( "name" => __('Footer Copyright','framework_localize'),
			"type" => "heading");
			
		//Copyright		
		$options[] = array( "name" => __('Copyright','framework_localize'),
			"desc" => "Copyright Footer.",
			"id" => $shortname."_footer",
			"std" => "",
			"type" => "text");

						
		//About
		$options[] = array( "name" => __('About','framework_localize'),
			"desc" => "About us.",
			"id" => $shortname."_about_us",
			"std" => "",
			"type" => "textarea");

		//About
		$options[] = array( "name" => __('Giới thiệu','framework_localize'),
			"desc" => "Giới thiệu ngay dưới bài viết đơn.",
			"id" => $shortname."_about_single",
			"std" => "",
			"type" => "textarea");	
			
//Thong tin Theme			
			
//Thong tin Theme			
$options[] = array( "name" => __('Thông tin Theme','framework_localize'),
			"type" => "heading");	
					
$options[] = array( "name" => __('Bản quyền','framework_localize'),
			"desc" => "",
			"id" => $shortname."_copyright",
			"std" => "			
				Lê Nguyễn Đức Huấn<br>
				Email:duchuanit@gmail.com .<br>
				Blog :duchuanblog.com<br>			
			
			",
			"type" => "info");			
			
	
							
update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>