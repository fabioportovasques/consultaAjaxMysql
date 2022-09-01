
$(document).ready(function(){

    $('#campo').keyup(function(){

        $('form').submit(function(){

            var dados = $(this).serialize();//this faz referencia ao formulário

            $.ajax({


                url:'../../controller/processa.php',
                type:'POST',
                dataType: 'html',
                data:dados,
                success:function(data){

                    $('#resultado').empty().html(data);     //limpara a div e logo após recer os dados

                }


            });

            return false;

        });

        $('form').trigger('submit');    //funcao triger dispara o evento


    });





});










// let consultar = document.querySelector('#butconsultar');

// consultar.addEventListener("click", function(event){
//     event.preventDefault(event);
//     console.log('clicou');
// })


// var submit = document.querySelector('#submit');


// submit.addEventListener("click", function(event){
//     event.preventDefault(event);
//     console.log('clicou');
// })

// $(document).ready(function (){

//     $('#campo').keyup(function(){

//         $('form').submit(function(){

//             var dados = $(this).serialize();
//             $.ajax({
//                 url:'pesquisar-class.php',
//                 type:'POST',
//                 datatype:'html',
//                 data:'dados',
//                 success: function(data){
//                     $('resultado').empty().html(data);
//                 }
//             })

//             return false;

//         });


//         $('form').trigger('submit');



//     });


// });