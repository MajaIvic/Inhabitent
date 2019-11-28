(function($) {
  $('.search-submit').on('click', function(event) {
    event.preventDefault();

    if (!$('.search-field').hasClass('search-animation')) {
      $('.search-field').addClass('search-animation');
      $('.search-field').focus();
    } else {
      $('.search-field').removeClass('search-animation');
    }
  });

  $('.search-field').on('blur', function() {
    $('.search-field').removeClass('search-animation');
  });
})(jQuery);
