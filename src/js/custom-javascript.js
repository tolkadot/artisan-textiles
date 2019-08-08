jQuery( document ).ready( function( $ ) {

var toggleAffix = function(affixElement, scrollElement, wrapper) {
    var height = affixElement.outerHeight(),
        top = wrapper.offset().top;

    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }
  };


  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div></div>');

    ele.before(wrapper);
    $(window).on('scroll resize', function() {
        toggleAffix(ele, $(this), wrapper);
    });

    // init
    toggleAffix(ele, $(window), wrapper);
  });

window.onscroll = function() {
  var width = $(window).width();
  if (width > 768){
  if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
    $('h1.navbar-brand').css('font-size', '25px');
    $('h1.navbar-brand').css('line-height', '25px');
    $( ".navbar .secondary-header" ).css( 'font-size', '15px' );
  } else {
    $('h1.navbar-brand').css('font-size', '45px');
    $('h1.navbar-brand').css('line-height', '45px');
    $( ".navbar .secondary-header" ).css( 'font-size', '25px' );
  }
  }
};

//Open meny dropdown on hover
function toggleDropdown (e) {
  var _d = $(e.target).closest('.dropdown'),
    _m = $('.dropdown-menu', _d);
  setTimeout(function(){
    var shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show-dropdown', shouldOpen);
    _d.toggleClass('show-dropdown', shouldOpen);
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

$('body')
  .on('mouseenter mouseleave','.dropdown',toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown);


});

jQuery('.woocommerce div.product form.cart button:last-child').click(function(e) {
	e.preventDefault();

	var product_id = jQuery(this).val();
	var variation_id = jQuery('input[name="variation_id"]').val();
	var quantity = jQuery('input[name="quantity"]').val();

	if (variation_id) {
		jQuery.ajax ({
			url: my_ajaxurl,
			type:'POST',
			data:'action=crispshop_add_cart_single&product_id=' + product_id + '&variation_id=' + variation_id + '&quantity=' + quantity,

			success:function(results) {
        console.log(results);
        jQuery('span.header-cart-count span').html(results);
			}
		});
	} else {
		jQuery.ajax ({
			url: my_ajaxurl,
			type:'POST',
			data:'action=crispshop_add_cart_single&product_id=' + product_id + '&quantity=' + quantity,

			success:function(results) {
				jQuery('span.header-cart-count span').html(results);
        console.log(results, "results2");
			}
		});
	}

});
