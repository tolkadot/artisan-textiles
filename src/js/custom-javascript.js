jQuery( document ).ready( function( $ ) {


//sticky header 
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


//change logo size on scroll  
// window.onscroll = function() {
//   var width = $(window).width();
//   if (width > 768){
//   if (document.body.scrollTop > 65 || document.documentElement.scrollTop > 65) {
//     $('.logo-box').css('width', '200px');
   
//   } else {
//     $('.logo-box').css('width', '450px');

//   }
//   }
// };

//Open menu dropdown on hover
$('ul.navbar-nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeIn(300);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeOut(300);
});


//Moving nav underline
    var target = document.querySelector(" .nav-moving-target");
    var links = document.querySelectorAll(" #main-menu>li>a.nav-link");

    function mouseenterFunc() {
      if (!this.parentNode.classList.contains("alive")) {
        for (var i = 0; i < links.length; i++) {
          if (links[i].parentNode.classList.contains("alive")) {
            links[i].parentNode.classList.remove("alive");
          }
        }
        this.parentNode.classList.add("alive");

        var rect = this.getBoundingClientRect();
        var  width, height, left, top;
        width = rect.width + 'px';
        height = rect.height + 'px';
        left = rect.left + 'px';

        target.style.width = width;
        target.style.height = height;
        target.style.left = left;
        target.style.transform = "none";
      }
    }

    function resizeFunc() {
    var active = $("#main-menu li.nav-item.alive>a");
    var width = $(window).width();
      if (active) {
        var rect = active[0].getBoundingClientRect();
        var left, width;
        left = rect.left + 'px';
        width = rect.width + 'px';

        target.style.left = left;
        target.style.width = width;
      }
      if(width < 768) {
        target.style.display = none;
      }
    }

      for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("mouseenter", mouseenterFunc);
      }
      $(window).on("resize", function(){
        resizeFunc();
    });

//fade-in class
  $(window).scroll( function(){
    $('.fade-me-in').each( function(i){
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        if( bottom_of_window > (bottom_of_object - 500) ){
            $(this).animate({'opacity':'1'},1000);
        }
      });
  });

});

//JS for up and down arrows on product quantity field.
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
