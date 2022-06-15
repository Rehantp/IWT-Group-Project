<?php
include 'connect.php';

//travel agent delete
if ($link==true){
    if(isset($_POST['delete'])&&$_POST['delete']==true){
        
        $sql = "DELETE FROM travel_agent Where ta_id='".$_POST['ta_id']."'";
        if(mysqli_query($link,$sql)){
            echo "<script>alert('Delete Success'); window.location.href='../home.php' ;</script>";

        }else{
            echo "<script>alert('Connection Error!'); window.location.href='../travel_agent_profile.php' ;</script>";
        }
    }
}
//travel agent delete end

//tour guide delete
if ($link==true){
    if(isset($_POST['delete'])&&$_POST['delete']==true){
        
        $sql = "DELETE FROM users Where id='".$_POST['id']."'";
        if(mysqli_query($link,$sql)){

            header('location:../home.php?status=Delete Success');

        }else{
            header('location:../forms/edit-tg.php?status=Connection Error!');
        }
    }
}
//tour guide delete end

//hotel delete
if ($link==true){
    if(isset($_POST['delete'])&&$_POST['delete']==true){
        
        $sql = "DELETE FROM hotel Where hid='".$_POST['hid']."'";
        if(mysqli_query($link,$sql)){

            echo "<script>alert('Delete Successful!'); window.location.href='../home.php' ;</script>";

        }else{
            echo "<script>alert('Connection Error!'); window.location.href='../hotel Manager_profile.php' ;</script>";
        }
    }
}
//Hotel delete end

//tour_driver delete
 if ($link==true){
     if(isset($_POST['delete'])&&$_POST['delete']==true){
        
         $sql = "DELETE FROM tour_driver Where td_id='".$_POST['id']."'";
         if(mysqli_query($link,$sql)){

            // header('location:../login.php?status=Delete Success');
            echo "<script>alert('Delete Success'); window.location.href='../forms/home.php' ;</script>";

         }else{
            // header('location:../edit.php?status=Connection Error!');
            echo "<script>alert('Connection Error!'); window.location.href='../tour_driver_profile.php' ;</script>";
        }
    }
    }
//tour_driver delete end