<!--<php error_reporting(0); ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title>Dashboard</title>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand px-5 fs-5" href="Dashboard.php">CRUD</a>
  </div>

  <div class="collapse navbar-collapse  id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a href="Login.php" class="nav-item nav-link text-info " style="text-decoration:none; ">Logout</a>
    </div>
  </div>
  
</nav>
<h3 class="text text-center  mt-4">Simple Login with Register and Account Management </h3>
<h5 class= "text text-center">and Have a CRUD Functionality</h5>
<h6 class= "text text-center text-warning ">@KristianJayTadeo</h6>

<div class="container">
<?php
include "Dashboard_code.php";
session_start();





?>


</div>

</head>


<body class="" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
<section>

<div class="row justify-content-center" >

<div class="col-md-8">


<?php 
 if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.$msg.'</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['msgs'])){
  $msgs = $_GET['msgs'];
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.$msgs.'</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['msgdel'])){
  $msgdel = $_GET['msgdel'];
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.$msgdel.'</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
if(isset($_GET['update'])){
  $update = $_GET['update'];
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.$update.'</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
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
    <a href="delete.php? deleteid='.$user_ID.'"><button class= "btn btn-danger text-white">Delete</button> </a>
    <a href="update.php? updateid='.$user_ID.'"><button class= "btn btn-primary text-white">Update</button></a>  
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

</section>  
<div class="justify-content-center text-center">
<a href=""><i class="bi bi-pencil-square"></i></a>
<a href="Add User.php" class=""><button class="btn btn-info text-white  text text-center m-1 bg-info text-white ">Add User</button></a>

</div>




  
</body>
</html>