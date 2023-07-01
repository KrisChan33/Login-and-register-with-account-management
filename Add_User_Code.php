<?php
   $conn = new mysqli("localhost","root","","login_with_register");
   if($conn->connect_error) {
       die("Failed To connect:" .$con->conn_error);
   } else {
    if(isset($_POST['Register'])){
    $username = $_POST['username']; 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $email = $_POST['email']; 
    $passwords = $_POST['passwords']; 
    $confirm_password = $_POST['confirm_password']; 

    if($passwords==$confirm_password)
    {
        $query = "INSERT INTO user_accounts (Username,Firstname,Lastname,Email_Address,Passwords) VALUES ('$username','$firstname','$lastname','$email','$passwords')";
        $query_run = mysqli_query($conn, $query);

            if($query_run){
               
                header('Location:Dashboard.php?msgs=Successfully Registered');
            } else {
                header('Location:Add User.php.php?msgf=Add User Failed');
               # echo "Failed:".mysqli_error($conn);
            }
    } else {
       # echo "Password Mismatch";
        header('Location:Add User.php?msgf2=Input Password!');

    }
}

    }
?>  

<!-- for login confirmation
    if($password==$confirm_password)
    {
        echo "Password Match";
    } else {
        echo "Password Mismatch";
    }
}-->