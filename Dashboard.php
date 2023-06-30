<!--<php error_reporting(0); ?> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<?php
include "Dashboard_code.php";
session_start();


if(isset($_SESSION['status'])){

    echo"<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>

<body class="bg-info bg-opacity-25" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">


<div class="row justify-content-center py-5 " >
<a href="Index.html" style="text-decoration:none; text-align:right; margin-top:-30px; margin-right:50px;"> <button class="btn bg-primary text-white">LOGOUT</button></a>

<div class="col-md-6 ">
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


<table class="table table-wrapper-scroll-y my-custom-scrollbar caption-top table-hover mx-1 ">
  <caption>List of Users</caption>
  <thead class="text-center ">
    <tr>
      <th scope="col">User ID.</th>
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
    <a href="delete.php? deleteid='.$user_ID.'"><button class= "btn btn-danger text-white m-1">Delete</button></a> 
<a href="update.php? updateid='.$user_ID.'"><button class= "btn btn-primary text-white m-1">Update</button></a>  
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
