
   <?php
   $conn = new mysqli("localhost","root","","login_with_register");
   if($conn->connect_error) {
       die("Failed To connect:" .$con->conn_error);
   } else {
      include "Dashboard_code.php";
    $id = $_GET['updateid'];
    if(isset($_POST['submit'])){
    $username = $_POST['username']; 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $email = $_POST['email']; 
    $passwords = $_POST['passwords']; 
    $confirm_password = $_POST['confirm_password']; 

    if($passwords==$confirm_password)
    {
        $query = "UPDATE user_accounts SET User_ID ='$id', Username = '$username',Firstname='$firstname',Lastname='$lastname', Email_Address='$email',Passwords = '$passwords' WHERE User_ID = '$id'";
        $query_run = mysqli_query($conn, $query);

            if($query_run){
               echo "Updated Successfully";
               //$_SESSION['register_status']='Successfully Registered';
              header('Location:Dashboard.php');
            } else {
                //$_SESSION['register_status']='Register Failed';
               echo "Update Failed";

            }
    } else {
        echo "Password Mismatch";
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