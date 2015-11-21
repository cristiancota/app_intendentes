$(document).ready(function(){
    $('#input1').keyup(
         function(){
             var clave =  $('#input1').val().trim();    
             //alert(clave);
            $.post( 'http://localhost/CodeBoots/db_controller/search',
                   {'search': clave},
                   function(resultado){
                      // alert(resultado);
                       var doc = '';
                       $.each(resultado, function(key, val){
                           doc+='<h3>'+val.lastName+ ' - <small>'+val.email+'</small></h3>';
                         
                       });
                       $('.resultados').html(doc);
                   },
                   'json'
                    );
         }
                         );
});

