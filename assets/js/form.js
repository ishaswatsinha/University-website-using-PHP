

$(document).ready(function(){
    $('#form-submit').click(function(event){
        
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone-number').val();
        
       

        // if (name ==="" || email === "" || phone === "" ) {

        //     $("#error1").text("name is required.");
        //     event.preventDefault();
            
        //     $("#error2").text("Email is required.");
        //     event.preventDefault();

        //     $("#error3").text("Phone is required.");
        //     event.preventDefault();

        // }

        // testing code
        if (name ===""){
            $("#error1").text("name is required.");
            event.preventDefault();
        }
        else if(email === ""){
            $("#error2").text("Email is required.")
            event.preventDefault();
        }
        else if (phone === ""){
            $("#error3").text("Phone is required.");
            event.preventDefault();
        }

        
    });
});

    // VALIDATION FOR LOGIN PAGE

$(document).ready(function(){
    $('#login-btn').click(function(event){
        
        var username = $('#username').val();
        var Password = $('#password').val();
        
        
       

        if (username ==="" || Password === ""  ) {

            $("#error7").text("name is required.");
            event.preventDefault();
            
            $("#error8").text("Email is required.");
            event.preventDefault();

        }
    });
});

    // VALIDATION FOR CONTACT SECTION
    $(document).ready(function(){
        $('#contact-submit').click(function(event){
            
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();
            
           
    
            if (name ==="" || email === "" || message === "" ) {
    
                $("#error4").text("name is required.");
                event.preventDefault();
                
                $("#error5").text("Email is required.");
                event.preventDefault();

                $("#error6").text("message is required.");
                event.preventDefault();
    
            }
        });
    });