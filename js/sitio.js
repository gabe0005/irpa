// JavaScript Document
$( document ).ready(function() {
    
// ACORDEON
    
  var allPanels = $('.accordion > dd').hide();
    
  $('.accordion > dt > a').click(function() {
      $this = $(this);
      $target =  $this.parent().next();
      $this.toggleClass('active');
      $target.toggleClass('active').slideToggle();
  });
});