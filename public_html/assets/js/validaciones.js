$(document).ready(function () {

    console.log($('form').serializeArray());


    $('form').keyup(function () {
        $.ajax(
                {
                    url: this.action,
                    type: this.method,
                    data: $(this).serialize(),
                    success: function (data) {
                        var json = $.parseJSON(data);
                      

                       

                        $('form').append(json);

                       
                    }

                }
        );
    });
});

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