<?php

include "Dashboard_code.php" ; 

if(isset($_GET['deleteid'])); {
    $id = $_GET['deleteid'];


    $sql = "delete from user_accounts where User_ID = $id";
    $result = mysqli_query($conn,$sql);
            if($result){
                  header("Location:Dashboard.php?msgdel=Successfully Deleted");
            } else{
                die(mysqli_error($conn));
            }
    
}

?> 