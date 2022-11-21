<?php if(isset($_POST['login'])){
   

    $connection=new mysqli(hostname:'localhost',username:'root',password:'',database:'user');
    $email=$connection->real_escape_string( $_POST['emailPHP']);
    $password=$connection->real_escape_string($_POST['passwordPHP']);

    $data=$connection->query(query:"SELECT id FROM users WHERE email ='$email' AND password='$password' ");

    if($data->num_rows>0){
        exit('succes');

    }
    else 
    exit('failed');



}
?>        