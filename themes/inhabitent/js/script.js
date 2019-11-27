(function($) {
  $('.search-submit').on('click', function(event) {
    event.preventDefault();

    if (!$('.search-field').hasClass('search-animation')) {
      // $('.search-field').removeClass('search-hide');
      $('.search-field').addClass('search-animation');
      $('.search-field').focus();
    } else {
      $('.search-field').removeClass('search-animation');
      // $('.search-field').addClass('search-hide');
    }
  });

  $('.search-field').on('blur', function() {
    // if ($('search-field').hasClass('search-opened')) {
    // $('.search-field').toggle('fast');
    $('.search-field').removeClass('search-animation');
    // }
  });
})(jQuery);
