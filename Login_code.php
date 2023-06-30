<head>
<!-- SweetAlert2 -->
<script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
<script src="jquery-3.3.1.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
</head>

<?php
session_start();

 $user = $_POST['username'];
 $pass = $_POST['password'];


 //Database connection
 $connection = new mysqli("localhost","root","","login_with_register");
    if($connection->connect_error) {
        die("Failed To connect:" .$con->connection_error);
    } else {
        
        $statement = $connection->prepare("select * from user_accounts where Username = ?");
        $statement -> bind_param("s",$user);
        $statement -> execute();
        $statement_result = $statement->get_result(); 

        if($statement_result->num_rows > 0){
            $data = $statement_result ->fetch_assoc();
            if($data['Passwords'] === $pass) {
               # $SESSION_["user"]= $user;
               # header('location:Dashboard.php');
              #  die;
               # $SESSION_['status'] = "<h1>Login Successfully</h1>";
               $_SESSION['status'] = "Login Successfully";
               header("location: Dashboard.php");
                #echo " <h2> Login Successfully <h2>";
            } else {
                #echo " <h2> Login Failed <h2>";
                #echo "s".$SESSION_['status'] = "Login Failed";
                 #header("location: Dashboard.php.php");
                 $SESSION['status'] = "Login Failed";
                 header("Location = Index.html");
                  die(mysqli_error($connection));
            }
        } else { 
            #echo "<h2> hello </h2>";
            $SESSION['status1'] = " Login Failed";
                header("Location:Index.html");
                die(mysqli_error($connection));

        }
    }
?>