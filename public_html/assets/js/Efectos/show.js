$(document).ready(function(){
    $('#Datos_representante').fadeOut();
    $('#Datos_contacto').fadeOut();
    $('#Datos_instalacion').fadeOut();
    
    $('#sol_2').on('click', function(){
      $('#Datos_empresa').fadeOut();
       $('#Datos_contacto').fadeOut();
    $('#Datos_instalacion').fadeOut();
      $('#Datos_representante').fadeIn('slow');
    });
    
      $('#sol_3').on('click', function(){
      $('#Datos_empresa').fadeOut();
      $('#Datos_representante').fadeOut();
      $('#Datos_instalacion').fadeOut();
       $('#Datos_contacto').fadeIn('slow');
    });
    
       $('#sol_4').on('click', function(){
      $('#Datos_empresa').fadeOut();
      $('#Datos_representante').fadeOut();
      $('#Datos_contacto').fadeOut();
       $('#Datos_instalacion').fadeIn('slow');
    });
    
       $('#sol_1').on('click', function(){
    $('#Datos_representante').fadeOut();
    $('#Datos_contacto').fadeOut();
    $('#Datos_instalacion').fadeOut();
      $('#Datos_empresa').fadeIn('slow');
      
    });
    
});

