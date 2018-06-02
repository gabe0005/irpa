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
        //$('.tabs .tab').hide();
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
    
// TAB RESPUESTA DE ALUMNOS    
    
    $(".tab-alumnos-header li:first-child").addClass("active"); //Activate first tab
    $(".tab-alumnos-body > .alumn-tab:first-child").addClass("active"); //Show first tab content
    
	$(".tab-alumnos-header > .tab").click(function() {

		$(".tab-alumnos-header > .tab").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab-alumnos-body > .alumn-tab").hide(); //Hide all tab content

		var activeTab = $(this).attr('data-tab'); //Find the href attribute value to identify the active tab + content
		$('#'+activeTab).fadeIn(); //Fade in the active ID content
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
    
    // Modal
    
	$('.modal-trigger').click(function(){
		var href = $(this).attr('data-modal');
		console.log(href);
		$('#' + href).fadeIn();
		$('#' + href).find('.modal-container').removeClass('bottom-out').addClass('bottom-in');
	});
	$('.modal-close').click(function(){
		$('.modal').delay(150).fadeOut();
		$('.modal-container').toggleClass('bottom-in bottom-out');
	});
    
    // Preview prueba
    
    
	$('.btn-editor').click(function(){
        $(this).parent().parent().parent().find('.modal-preview').fadeToggle().toggleClass('bottom-in bottom-out');
        $(this).text(function(i, text){
          return text === "Vista previa" ? "Editor" : "Vista previa";
      })
	});
    
    
    // Subir imagen al modal
    
    // cambio de texto
    $('#btn-file').change(function(e){
        var fileName = e.target.files[0].name;
        $('.txtimg-enunciado').html(fileName);
    });
    
    // cambio de imagen
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#img-load').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $('#btn-file').change(function() {
      readURL(this);
        $('.submit-file label').hide();
        $('#borrar-img').show().addClass('testing');
    });
    
    // Limpiar
    
    $('#borrar-img').click(function(e){
        $(this).hide();
        $('#img-load').attr('src','img/img-bg-enunciado.png');
        $('.txtimg-enunciado').html('Sin imagen adjunta');
        $('.submit-file label').show();
        $('#btn-file').val('');
    });
    
    
    // Habilitar tamaños de imagen
    $('.inputsize').click(function() {
        if($('#tam-otro').is(':checked')) {
            $('#otro-tam').removeClass('disable');
            $('#otro-tam').find('input').prop("disabled", false);
        }
        else {
            $('#otro-tam').addClass('disable');
            $('#otro-tam').find('input').prop("disabled", true);
        }
    });
    
    // texto verdadero falso
    
    $('.detalle-vf .switch input').change(function(e){
        if($(this).is(':checked')) {
            $('.detalle-vf .switch .txt').html('Verdadero');
        }
        else {
            $('.detalle-vf .switch .txt').html('Falso');
        }
    });
    
    // Opciones que aparecen luego de poner "otro" en objetivo de aprendizaje
    
    $('.select-oa').change(function(e){
        if($(this).find(' option:selected').val() == "otro") {
            $(this).next('div').slideDown();
        }
        else {
            $(this).next('div').slideUp();
        }
    });
    
    // Opciones que aparecen luego de poner "otro" en objetivo de aprendizaje
    
    $('.rc-box .switch input').click(function() {
        if($(this).is(':checked')) {
            $('.rc-box').has(this).addClass('active');
            $('.rc-box').has(this).find('.title span').html('Campo para el alumno');
        }
        else {
            $('.rc-box').has(this).removeClass('active');
            $('.rc-box').has(this).find('.title span').html('Campo para el profesor');
        }
    });
    
    // Multiselect 
    var container = $('.multiselect');
    $('.multiselect-field').click(function() {
        container.has(this).find('.options').fadeIn().removeClass('top-out').addClass('top-in active');
    });
    $('.multiselect .checkbox').click(function(e){
        var n = $('.multiselect').find('input:checkbox:checked').length;
        if(n == 1) {
            container.has(this).find('.multiselect-field').html(n + ' seleccionado');
        }
        else if(n > 1) {
            container.has(this).find('.multiselect-field').html(n + ' seleccionados');
        }
        else {
            container.has(this).find('.multiselect-field').html('Seleccionar...');
        }
    });
    $(document).mouseup(function (e) {
        if (!container.is(e.target) // if the target of the click isn't the container...
           && container.has(e.target).length === 0) // ... nor a descendant of the container
           {
             container.find('.options.active').fadeOut(200).removeClass('top-in active');
          }
    });
    
});
