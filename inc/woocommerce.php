<?php
/**
 * Add WooCommerce support
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'understrap_woocommerce_support' );
if ( ! function_exists( 'understrap_woocommerce_support' ) ) {
	/**
	 * Declares WooCommerce theme support.
	 */
	function understrap_woocommerce_support() {
		add_theme_support( 'woocommerce' );

		// Add New Woocommerce 3.0.0 Product Gallery support.
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-slider' );

		// hook in and customizer form fields.
		add_filter( 'woocommerce_form_field_args', 'understrap_wc_form_field_args', 10, 3 );
	}
}

/**
* First unhook the WooCommerce wrappers
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
* Then hook in your own functions to display the wrappers your theme requires
*/
add_action( 'woocommerce_before_main_content', 'understrap_woocommerce_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'understrap_woocommerce_wrapper_end', 10 );
if ( ! function_exists( 'understrap_woocommerce_wrapper_start' ) ) {
	function understrap_woocommerce_wrapper_start() {
		$container = get_theme_mod( 'understrap_container_type' );
		echo '<div class="wrapper pt-std" id="woocommerce-wrapper">';
		echo '<div class="' . esc_attr( $container ) . '" id="content" tabindex="-1">';
		echo '<div class="row">';
		get_template_part( 'global-templates/left-sidebar-check' );
		echo '<main class="site-main" id="main">';
	}
}
if ( ! function_exists( 'understrap_woocommerce_wrapper_end' ) ) {
	function understrap_woocommerce_wrapper_end() {
		echo '</main><!-- #main -->';
		get_template_part( 'global-templates/right-sidebar-check' );
		echo '</div><!-- .row -->';
		echo '</div><!-- Container end -->';
		echo '</div><!-- Wrapper end -->';
	}
}


/**
 * Filter hook function monkey patching form classes
 * Author: Adriano Monecchi http://stackoverflow.com/a/36724593/307826
 *
 * @param string $args Form attributes.
 * @param string $key Not in use.
 * @param null   $value Not in use.
 *
 * @return mixed
 */
if ( ! function_exists( 'understrap_wc_form_field_args' ) ) {
	function understrap_wc_form_field_args( $args, $key, $value = null ) {
		// Start field type switch case.
		switch ( $args['type'] ) {
			/* Targets all select input type elements, except the country and state select input types */
			case 'select':
				// Add a class to the field's html element wrapper - woocommerce
				// input types (fields) are often wrapped within a <p></p> tag.
				$args['class'][] = 'form-group';
				// Add a class to the form input itself.
				$args['input_class']       = array( 'form-control', 'input-lg' );
				$args['label_class']       = array( 'control-label' );
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
					// Add custom data attributes to the form input itself.
				);
				break;
			// By default WooCommerce will populate a select with the country names - $args
			// defined for this specific input type targets only the country select element.
			case 'country':
				$args['class'][]     = 'form-group single-country';
				$args['label_class'] = array( 'control-label' );
				break;
			// By default WooCommerce will populate a select with state names - $args defined
			// for this specific input type targets only the country select element.
			case 'state':
				// Add class to the field's html element wrapper.
				$args['class'][] = 'form-group';
				// add class to the form input itself.
				$args['input_class']       = array( '', 'input-lg' );
				$args['label_class']       = array( 'control-label' );
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
				);
				break;
			case 'password':
			case 'text':
			case 'email':
			case 'tel':
			case 'number':
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
			case 'textarea':
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
			case 'checkbox':
				$args['label_class'] = array( 'custom-control custom-checkbox' );
				$args['input_class'] = array( 'custom-control-input', 'input-lg' );
				break;
			case 'radio':
				$args['label_class'] = array( 'custom-control custom-radio' );
				$args['input_class'] = array( 'custom-control-input', 'input-lg' );
				break;
			default:
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
		} // end switch ($args).
		return $args;
	}
}

//Artisan Textiles mods //

//Single Product Page
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 20 );

//Archive Product Page
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//Accounts Page
add_filter( 'woocommerce_account_menu_items', 'custom_remove_downloads_my_account', 999 );

function custom_remove_downloads_my_account( $items ) {
unset($items['downloads']);
return $items;
}


//Show & Update the cart in the header.
function tolka_wc_show_cart() {
	  ob_start();
		global $woocommerce;

		$viewing_cart = __('View your shopping cart', 'your-theme-slug');
		$cart_url = $woocommerce->cart->get_cart_url();
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$display_cart = '<div class="header-cart-count show-mobile d-flex justify-content-center align-items-center"><a class="et-cart-info" href="'. $cart_url .'" title="'. $viewing_cart .'">';
		$display_cart .= '<span class="header-cart-count d-flex justify-content-center align-items-center"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="brand-primary ">'. $cart_contents_count . '</span></span>';
		$display_cart .= '</a></div>';

		echo $display_cart;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'tolka_cart_count_fragments', 10, 1 );
function tolka_cart_count_fragments( $fragments ) {
  $cart_contents_count = WC()->cart->get_cart_contents_count();
  $fragments['span.header-cart-count'] = '<span class="header-cart-count d-flex justify-content-center align-items-center"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="brand-primary ">' . $cart_contents_count. '</span></span>';
  return $fragments;
}




//Plus Minus Quantity Buttons @ WooCommerce Single Product Page

add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
   echo '<button type="button" class="plus border-0" ></button><button type="button" class="minus border-0" ></button>';
}

add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );

function bbloomer_add_cart_quantity_plus_minus() {
   // Only run this on the single product page
   if ( ! is_product() ) return;
   ?>
      <script type="text/javascript">

      jQuery(document).ready(function($){

         $('form.cart').on( 'click', 'button.plus, button.minus', function() {

            // Get current quantity values
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));

            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }

         });

      });

      </script>
   <?php
}
//

function crispshop_add_cart_single_ajax() {
	$product_id = $_POST['product_id'];
	$variation_id = $_POST['variation_id'];
	$quantity = $_POST['quantity'];

	if ($variation_id) {
		WC()->cart->add_to_cart( $product_id, $quantity, $variation_id );
	} else {
		WC()->cart->add_to_cart( $product_id, $quantity);
	}
    $items = WC()->cart->get_cart();
    global $woocommerce;
    $item_count = $woocommerce->cart->cart_contents_count; ?>
    <?php echo $item_count; ?>
     <?php die();
}

add_action('wp_ajax_crispshop_add_cart_single', 'crispshop_add_cart_single_ajax');
add_action('wp_ajax_nopriv_crispshop_add_cart_single', 'crispshop_add_cart_single_ajax');


function understrap_tolka_show_title(){
 echo "<h1>Password Reset</h1>";
}
add_action( 'woocommerce_before_lost_password_form', 'understrap_tolka_show_title', 10 );


add_filter( 'woocommerce_available_payment_gateways', 'enable_gateway_order_pay' );
function enable_gateway_order_pay( $available_gateways ) {
    global $woocommerce;
    $coupon = $woocommerce->cart->applied_coupons;
    if ( is_checkout() && ! is_wc_endpoint_url( 'order-pay' ) ) {
      if (  empty( $coupon ) ) {
        unset( $available_gateways['cod'] );
      }
      else{
        $cod_enabled = false;
        if($coupon[0]=='scarfparty') {$cod_enabled = true;}
        if($coupon[0]=='innercircle') {$cod_enabled = true;}
        if(!$cod_enabled) {
            unset( $available_gateways['cod'] );
        }
      }
      }

return $available_gateways;
}
