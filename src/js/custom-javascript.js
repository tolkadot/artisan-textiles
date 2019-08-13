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
  .on('mouseenter mouseleave','.dropdown>a',toggleDropdown)
  .on('click', '.dropdown> a', toggleDropdown);


  //Moving nav underline
    var target = document.querySelector(" .nav-moving-target");
    var links = document.querySelectorAll(" #main-menu .nav-link");

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
    var active = $("#main-menu li.nav-item.alive a");
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


    //
    // var waypoint = new Waypoint({
    //   element: document.getElementById('featured-text'),
    //   handler: function() {
    //     document.getElementById('featured-text').animate({'opacity':'1'},1000);
    //   }
    // })



    $(window).scroll( function(){
    /* Check the location of each desired element */
    $('.fade-me-in').each( function(i){

        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > (bottom_of_object - 500) ){
            $(this).animate({'opacity':'1'},1000);
        }
      });

        // var docViewTop = $(window).scrollTop();
        // var docViewBottom = docViewTop + $(window).height();
        //
        // var elemTop = $(elem).offset().top;
        // var elemBottom = elemTop + $(elem).height();
        // return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        //
        // var top_of_object = $(this).position().top;
        // console.log(top_of_object, $(document).scrollTop());
        //   if($(document).scrollTop() == top_of_object + 50) {
        //     $(this).animate({'opacity':'1'},1000);
        //   }

      //});
    // });

  });
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
