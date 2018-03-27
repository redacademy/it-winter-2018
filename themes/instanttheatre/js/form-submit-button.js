(function ($) {
  var $searchInput = $('.search-field');
  $('.main-navigation .search-field').on('click', function (e) {
    e.preventDefault();
    $searchInput.focus();
  
    $(document).on('keypress', function (event) {
      if ($searchInput.val() !== '') {
        if (event.which == 13) {
          console.log('enter pressed');
          $('.search-form').submit();
        }
      }
    });
  });
})(jQuery);
