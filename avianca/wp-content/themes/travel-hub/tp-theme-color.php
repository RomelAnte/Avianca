<?php
	
$adventure_travelling_tp_theme_css = '';

$adventure_travelling_tp_color_option = get_theme_mod('adventure_travelling_tp_color_option');

//PINK
if($adventure_travelling_tp_color_option != false){
$adventure_travelling_tp_theme_css .=' .top-header, .search-box i,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover ,.more-btn a,.blog-info,#footer button[type="submit"],.woocommerce a.button,.woocommerce button.button.alt,.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce a.button.alt,.next.page-numbers, .page-numbers, #theme-sidebar button[type="submit"],.cat-inner-box a,#comments input[type="submit"],#travel-offer h4,.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,button[type="submit"],.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.read-more-btn a{';
$adventure_travelling_tp_theme_css .='background-color: '.esc_attr($adventure_travelling_tp_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_color_option != false){
$adventure_travelling_tp_theme_css .=' a,.logo h1 a, .logo p a,.call i, .email i,p.infotext, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a,.site-info a, .woocommerce-MyAccount-content a,.woocommerce p.stars a ,.woocommerce-info a ,.product-name a,.box-content a:hover,#travel-offer h6, #footer .wp-block-calendar a,.logged-in-as a,.woocommerce-privacy-policy-text a,.wp-block-quote a,.page-numbers:hover, .main-navigation a:hover,.post_tag a:hover, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, p.infotext, a:hover,a.added_to_cart.wc-forward{';
$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_tp_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_color_option != false){
$adventure_travelling_tp_theme_css .='.post_tag a:hover,.readmore-btn a:hover {';
$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_color_option != false){
$adventure_travelling_tp_theme_css .='#slider .inner_carousel, #static-blog h3 , #travel-offer h2   {';
$adventure_travelling_tp_theme_css .='border-left-color: '.esc_attr($adventure_travelling_tp_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}

//secondary color  BLUE
$travel_hub_tp_secondary_color_option = get_theme_mod('travel_hub_tp_secondary_color_option');

if($travel_hub_tp_secondary_color_option != false){
$adventure_travelling_tp_theme_css .='#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.more-btn a:hover,#footer button[type="submit"]:hover,.woocommerce a.button:hover,.woocommerce a.button:hover,.woocommerce button.button.alt:hover,.woocommerce #respond input#submit:hover,.woocommerce button.button:hover, .woocommerce a.button.alt:hover,span.meta-nav,.next.page-numbers:hover, .page-numbers:hover, #theme-sidebar button[type="submit"]:hover,.menubar,.main-navigation ul ul,.cat-inner-box a:hover,#comments input[type="submit"]:hover,.error-404 [type="submit"], .menubar,.wc-block-cart__submit-container a:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover,.read-more-btn a:hover,.site-info,#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before {';
$adventure_travelling_tp_theme_css .='background-color: '.esc_attr($travel_hub_tp_secondary_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}

if($travel_hub_tp_secondary_color_option != false){
$adventure_travelling_tp_theme_css .='a:hover,h1, h2, h3, h4, h5, h6, .timebox span,.timebox i,.social-media span, .social-media i,.search-box i,.blog-info,#static-blog h3,#static-blog h4 a,.site-info a:hover a, .woocommerce-MyAccount-content a:hover,.woocommerce a.button,.woocommerce button.button.alt,.woocommerce p.stars a :hover,.woocommerce #respond input#submit,#theme-sidebar a:hover,.woocommerce button.button, .woocommerce a.button.alt ,.box-content a,.box-info i,#footer a:hover,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #travel-offer h2 ,.cat-inner-box a,#footer li a:hover, error-404 not-found h2,.more-btn a ,#travel-offer h4,#theme-sidebar .wp-block-search .wp-block-search__label, #theme-sidebar a:hover, #footer a:hover, .post_tag a:hover, #theme-sidebar .tagcloud a:hover, p.wp-block-tag-cloud a:hover, #theme-sidebar .widget_tag_cloud a:hover,#theme-sidebar button[type="submit"],#footer button[type="submit"],.next.page-numbers, .page-numbers,.wc-block-cart__submit-container a,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,.read-more-btn a,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$adventure_travelling_tp_theme_css .='color: '.esc_attr($travel_hub_tp_secondary_color_option).';';
$adventure_travelling_tp_theme_css .='}';
} 
if($travel_hub_tp_secondary_color_option != false){
$adventure_travelling_tp_theme_css .='#theme-sidebar a:hover,#footer a:hover,.post_tag a:hover,#theme-sidebar .tagcloud a:hover,p.wp-block-tag-cloud a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($travel_hub_tp_secondary_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
if($travel_hub_tp_secondary_color_option != false){
$adventure_travelling_tp_theme_css .='.page-box, #theme-sidebar section{';
$adventure_travelling_tp_theme_css .='border-left-color: '.esc_attr($travel_hub_tp_secondary_color_option).'!important;';
$adventure_travelling_tp_theme_css .='}';
}
if($travel_hub_tp_secondary_color_option != false){
$adventure_travelling_tp_theme_css .='.page-box, #theme-sidebar section{';
$adventure_travelling_tp_theme_css .='border-bottom-color: '.esc_attr($travel_hub_tp_secondary_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}

//Preloader
$adventure_travelling_tp_preloader_color1_option = get_theme_mod('adventure_travelling_tp_preloader_color1_option');

if($adventure_travelling_tp_preloader_color1_option != false){
$adventure_travelling_tp_theme_css .='.center1{';
	$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_preloader_color1_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_preloader_color1_option != false){
$adventure_travelling_tp_theme_css .='.center1 .ring::before{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_color1_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_tp_preloader_color2_option = get_theme_mod('adventure_travelling_tp_preloader_color2_option');

if($adventure_travelling_tp_preloader_color2_option != false){
$adventure_travelling_tp_theme_css .='.center2{';
	$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_preloader_color2_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_preloader_color2_option != false){
$adventure_travelling_tp_theme_css .='.center2 .ring::before{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_color2_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}

//Footer
$adventure_travelling_tp_preloader_bg_color_option = get_theme_mod('adventure_travelling_tp_preloader_bg_color_option');

if($adventure_travelling_tp_preloader_bg_color_option != false){
$adventure_travelling_tp_theme_css .='.loader{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_bg_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_tp_footer_bg_color_option = get_theme_mod('adventure_travelling_tp_footer_bg_color_option');


if($adventure_travelling_tp_footer_bg_color_option != false){
$adventure_travelling_tp_theme_css .='#footer{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_footer_bg_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
$adventure_travelling_footer_widget_image = get_theme_mod('adventure_travelling_footer_widget_image');
	if($adventure_travelling_footer_widget_image != false){
		$adventure_travelling_tp_theme_css .='#footer{';
			$adventure_travelling_tp_theme_css .='background: url('.esc_attr($adventure_travelling_footer_widget_image).');';
		$adventure_travelling_tp_theme_css .='}';
	}

//======================= slider Content layout ===================== //
 
$travel_hub_slider_content_layout = get_theme_mod('travel_hub_slider_content_layout', 'LEFT-ALIGN'); 
$adventure_travelling_tp_theme_css .= '#slider .carousel-caption{';
switch ($travel_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:center; left: 30%; right: 30%';
        break;
    case 'RIGHT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:right; left: 40%; right: 15%';
        break;
    default:
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
}
$adventure_travelling_tp_theme_css .= '}';

$travel_hub_slider_content_layout = get_theme_mod('travel_hub_slider_content_layout', 'LEFT-ALIGN'); 
$adventure_travelling_tp_theme_css .= '#slider .inner_carousel{';
switch ($travel_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'border-left: 5px solid #fcbcba;height:50px';
        break;
    case 'CENTER-ALIGN':
        $adventure_travelling_tp_theme_css .= 'border-left: 5px solid #fcbcba;height:50px';
        break;
    case 'RIGHT-ALIGN':
    $adventure_travelling_tp_theme_css .= ' border-right: 5px solid #fcbcba;height:50px;padding-right:12px;';
    break;
    default:
        $adventure_travelling_tp_theme_css .= 'border-right: 5px solid #000;height:50px';
        break;
}
$adventure_travelling_tp_theme_css .= '}';

//Font Weight
$adventure_travelling_menu_font_weight = get_theme_mod( 'adventure_travelling_menu_font_weight','500');
if($adventure_travelling_menu_font_weight == '100'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 100;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '200'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 200;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '300'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 300;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '400'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 400;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '500'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 500;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '600'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 600;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '700'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 700;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '800'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 800;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '900'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 900;';
$adventure_travelling_tp_theme_css .='}';
}