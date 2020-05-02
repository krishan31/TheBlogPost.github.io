$('.search-bar .icon').on('click',function(){
    $(this).parent().toggleClass('active');
});


// $(document).ready(function(){
//     $('#test').text('hello world');
// });


 $(document).ready(function(){
    $('#hideandseek').click(function(){
        $('.room').hide();
    })
 });

//  $(document).ready(function(){
//     $('.search-bar').click(function(){
//         $('this').toggle();
//     });
//  }
$(document).ready(function(){
    $('#submit').click(function(){
        var user = $('#username').val();

        if (user == ""){
            $('#show_error').html('**The username must be filled.');
            $('#show_error').css('color','red');
            return false;
        }



        if ((user.length <= 2) || (user.lenght <= 26)) {
            $('#show_error').html('**The username must be between 3 and 25 letters');
            $('#show_error').css('color','red');
            return false;
        }
    });

    $('#submit').click(function(){

    var view = $('#pwd').val();

    if (view == "") {
        $('#show_Error').html('please type the inputs');
        $('#show_Error').css('color','red');
        return false;
    }

    if ((view.length <= 4) || (view.length == '@#$%!&*')) {

        $('#show_Error').html('please above 4 inputs');
        $('#show_Error').css('color','red');
        return false;
    }
});

});


                // <!-- confirm password validation --
// $(document).ready(function(){
    $('#confirmpwd').keyup(function(){
        var pwd = $('#pwdd').val();
        var cpwd = $('#confirmpwd').val();

        if (cpwd!=pwd) {
            $('#show_erroR').html('**The password not match');
            $('#show_erroR').css('color','red');
            return false;

        } else{
            $('#show_erroR').html("");
            return false;
        }
    });
// });




ClassicEditor
    .create( document.querySelector( '#body' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

