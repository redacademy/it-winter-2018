jQuery(document).ready(function($) {

  $('#calendar-view').on('click', function(){
    $('#class-list').hide();
    $('#class-calendar').show();
    $(this).addClass('selected');
    $('#list-view').removeClass('selected');

    $('.list-of-classes .main-heading').text('Class Schedule');
  })

  $('#list-view').on('click', function(){
    $('#class-calendar').hide();
    $('#class-list').show();
    $(this).addClass('selected');
    $('#calendar-view').removeClass('selected');

    $('.list-of-classes .main-heading').text('List of Classes');
  })

})