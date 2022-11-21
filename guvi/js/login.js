   $(document).ready(function(){
        $("#login").on('click',function(){
            var email=$("#email").val();
            var password=$("#password").val();
            console.log(email);
            console.log(password);


            if (email=="" || password=="")
            alert('pls enter all the fields');
           
            
        });
        });

   
