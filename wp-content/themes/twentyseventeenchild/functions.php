<?php 
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 

	
/* Custom post type display product*/
function create_display_product_post_type() {
	  $label = array(
        'name' => 'display-products', //post type name in plural
        'singular_name' => 'display-product' //post type name in singular
    );

	register_post_type( 'display-product-slug',
	// CPT Options
		array(
			'labels' => $label,
			        'description' => 'Add Product to display', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_display_product_post_type' );


/* Get Display Product Post*/
add_filter('pre_get_posts','get_display_product_post');
function get_display_product_post($query) {
  if (is_home() && $query->is_main_query ())	// Currently try on home page -> need to upate on any page
    $query->set ('post_type', array ('post','display-product-slug'));
    return $query;
}
 ?>