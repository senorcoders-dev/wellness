$ = jQuery;

$(document).ready( function(){
    if( $('#registerUser').length > 0 ){
        $('#registerUser').on('click', function(){
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" ;
        var ajaxurl = baseUrl + 'wp-admin/admin-ajax.php';  
        

        //La llamada AJAX
            $.ajax({
                type : "post",
                url : ajaxurl, // Pon aquí tu URL
                data : {
                    action: "register_team_member", 
                    name : $('#name').val(),
                    team : $( '#team' ).val(),
                    email : $( '#email' ).val(),
                    password : $( '#password' ).val()
                },
                error: function(response){
                    console.log(response);
                },
                success: function(response) {
                    // Actualiza el mensaje con la respuesta
                    $('.message').text(response.email);
                }
            })
    
        });
    }
	
});