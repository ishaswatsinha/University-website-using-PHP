$(document).ready(function(){
    $('#login-btn').click(function(event){
        
        var username = $('#username').val();
        var Password = $('#password').val();
        
        
       

        if (username ==="" || Password === ""  ) {

            $("#error1").text("name is required.");
            event.preventDefault();
            
            $("#error2").text("Email is required.");
            event.preventDefault();

        }
    });
});

