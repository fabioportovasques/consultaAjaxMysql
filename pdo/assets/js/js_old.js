

var submit = document.querySelector('#submit');


submit.addEventListener("click", function(event){
    event.preventDefault(event);
    console.log('clicou');
})

$(document).ready(function (){

    $('#campo').keyup(function(){

        $('form').submit(function(){

            var dados = $(this).serialize();
            $.ajax({
                url:'pesquisar-class.php',
                type:'POST',
                datatype:'html',
                data:'dados',
                success: function(data){
                    $('resultado').empty().html(data);
                }
            })

            return false;

        });


        $('form').trigger('submit');



    });


});