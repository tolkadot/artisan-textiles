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


});
