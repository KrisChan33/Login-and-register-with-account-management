<!--<php error_reporting(0); ?> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand px-5 h-5" href="Dashboard.php">CRUD</a>
  </div>

  <div class="collapse navbar-collapse  id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a href="Login.php" class="nav-item nav-link text-info " style="text-decoration:none; ">Logout</a>
    </div>
  </div>
</nav>

<h3 class="text text-center  m-4">Simple Login with Register and Account Management </h3>
<h5 class= "text text-center">and Have a CRUD Functionality</h5>

<div class=" text-white h4 p-1 mb-2">
<?php
include "Dashboard_code.php";
session_start();


if(isset($_SESSION['status'])){

    echo"<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>


</div>

</head>


<body class="" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">


<div class="row justify-content-center" >

<div class="col-md-8">
<?php 


if(isset($_SESSION['status'])){

  echo"<h4>".$_SESSION['status']."</h4>";
  unset($_SESSION['status']);
}

if(isset($_SESSION['deletemessage'])){
  echo"<h4>".$_SESSION['deletemessage']."</h4>";
       unset($_SESSION['deletemessage']);
} 
?>


<table class=" bg-light table table-bordered table-wrapper-scroll-y my-custom-scrollbar caption-top table-hover ">
  <caption>List of Users</caption>
  <thead class="text-center table-primary">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Username.</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>
    



<?php 
$sql = "SELECT * FROM user_accounts";
$result = mysqli_query($conn, $sql);

if($result){
while( $row=mysqli_fetch_assoc($result)){
  $user_ID=$row ['User_ID'];
  $username=$row ['Username'];
  $firstname=$row ['Firstname'];
  $lastname=$row ['Lastname'];
  $email=$row ['Email_Address'];
  $password=$row ['Passwords'];

    echo '<tr>
    <th scope="row">'.$user_ID.'</th>
    <td>'.$username.'</td>
    <td>'.$firstname.'</td>
    <td>'.$lastname.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td class="text text-center mx-4">
    <a href="delete.php? deleteid='.$user_ID.'"><button class= "btn btn-danger text-white m-1">Delete</button></a> <a href="update.php? updateid='.$user_ID.'"><button class= "btn btn-primary text-white m-1">Update</button></a>  
    </td>

';
}
}

?>
    </tr>
 
  </tbody>
 
</table>


</div>


</div>


<a href="Add User.php"><button class="btn btn-info text-white m-1 bg-info text-white ">Add User</button></a>



  
</body>
</html>