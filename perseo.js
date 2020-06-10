//Esta funcion es para poner y eliminar la clase active del side bar, mostrar y ocultar.
 $(document).on('click', '#btn-sidebar', function(event) {
 	$("#sidebar").toggleClass('active');
    $("#cuerpo-perseo").toggleClass('active');
 });

//Funcion para hacer girar la flecha del side bar
 $(document).on('click', '.sidebtn', function(event) {

	var memoria=$(this).attr("aria-expanded").toString();

 	if(memoria=="false"){
 		$(this).children(".subbtn").removeClass('rotar-90');
 		$(this).children(".subbtn").addClass('rotar90');
 	}
 	else if(memoria=="true"){
 		$(this).children(".subbtn").removeClass('rotar90');
 		$(this).children(".subbtn").addClass('rotar-90');

 	}

 });

 $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll == 0) {
        // console.log("arriba");
         $("#btn-sidebar i:nth-child(2)").addClass('d-none');
         $("#btn-sidebar i:nth-child(1)").removeClass('d-none');

         $("#btn-sidebar").removeClass('btn-sidebar-abajo');

    } else {
         // console.log("abajo");
         $("#btn-sidebar i:nth-child(1)").addClass('d-none');
         $("#btn-sidebar i:nth-child(2)").removeClass('d-none');

         $("#btn-sidebar").addClass('btn-sidebar-abajo');
    }
});
