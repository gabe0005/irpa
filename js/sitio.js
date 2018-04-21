// JavaScript Document
$( document ).ready(function() {
    
// ACORDEON
    
  $('.accordion > dd').hide();
    
  $('.accordion > dt > a').click(function() {
      $this = $(this);
      $target =  $this.parent().next();
      $this.toggleClass('active');
      $target.toggleClass('active').slideToggle();
  });
    
// ACORDEON PREGUNTAS
      
  $('.col-body:not(.active)').hide();
    
  $('.collapse .col-indicator').click(function() {
      $this = $(this).parent().parent();
      $target =  $this.find('.col-body');
      $this.toggleClass('active')
      $target.toggleClass('active').slideToggle();
  });  
    
    
// TABS
    
    //When page loads...
    if(!$('.type-menu .checkbox input').is(':checked')){
        $('.tabs .tab').hide();
    }
        $(".tab-content").hide(); //Hide all content
        $("ul.tabs li:first-child").addClass("active"); //Activate first tab
        $(".tab-content:first-child").show(); //Show first tab content
    
	//On Click Event
	$("ul.tabs > .tab").click(function() {

		$("ul.tabs .tab").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab-content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
    
    $('#add-type').click(function() {
        $('.type-menu').fadeToggle(200).toggleClass('active');
        $('.tour').fadeOut(200);
    });
    $('.type-menu .checkbox input').click(function(e){
        $id = $(this).parent().attr('id');
        if ($(this).is(':checked')) {
            $('#tab-'+$id).fadeIn(100);
        } else {
            $('#tab-'+$id).fadeOut(100);
        }
    });
    
    
    
// INPUT NUMBER    
       
    $(".btn-number").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();

      if ($button.hasClass('sum')) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }
      $button.parent().find("input").val(newVal);
    });
    
    
    // Justificar preguntas
    
    $('#justificar input').click(function() {
        if($(this).is(':checked')) {
            $('#nlineas').removeClass('disable');
            $("#nlineas input").prop('disabled', false);
            $("#nlineas .btn-number").prop('disabled', false);
        } else {
            $('#nlineas').addClass('disable');
            $("#nlineas input").prop('disabled', true).val('0');
            $("#nlineas .btn-number").prop('disabled', true);
        }
    });
    
});
