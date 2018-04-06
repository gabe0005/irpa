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
    
  // ACORDEON PREGUNTAS
      
  var allPanels = $('.col-body:not(.active)').hide();
    
  $('.collapse .col-indicator').click(function() {
      $this = $(this).parent().parent();
      $target =  $this.find('.col-body');
      $this.toggleClass('active');
      $target.toggleClass('active').slideToggle();
  });  
    
    
// TABS
    
    //When page loads...
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
    $('.checkbox input').click(function(e){
        $id = $(this).parent().attr('id');
        $('#tab-'+$id).fadeToggle();
    });
    
});

// Drag and drop
function handleDragStart(e) {
  ('.pregunta').style.opacity = '0.1';  // this / e.target is the source node.
}

var cols = document.querySelectorAll('.pregunta');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', handleDragStart, false);
});