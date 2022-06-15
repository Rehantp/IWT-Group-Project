<?php
include 'connect.php';

// travel agent register
if ($link==true){
    if(isset($_POST['register_ta'])&&$_POST['register_ta']==true){ 
        $chk = "select * from travel_agent where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/travel_agent/' . uniqid() . time() . '.' . $ext['extension']; 

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            // change
            $sql = "INSERT INTO travel_agent (name,regno,tel,address,email,image,password) 
            VALUES ('".$_POST['name']."', '".$_POST['regno']."', '".$_POST['tel']."', '".$_POST['address']."', '".$_POST['email']."', '".$fileimage."', '".$_POST['password']."')"; 
            
            if(mysqli_query($link,$sql)){

                $ins_id =$link->insert_ta_id; 

                // header('location:../forms/login-ta.php?status=success'); 
                echo "<script>alert('Registration Successful'); window.location.href='../forms/login-ta.php' ;</script>";

            }else{
                // header('location:../forms/register-ta.php?status=Connection Error!'); 
                echo "<script>alert('Connection Error!'); window.location.href='../forms/register-ta.php' ;</script>";
            }
        }else{
            // header('location:../forms/register-ta.php?status=Email is Already Exists!'); 
            echo "<script>alert('Email is Already Exists!'); window.location.href='../forms/register-ta.php' ;</script>";
        }
    }
}
// travel agent register end

// tour guide register 
if ($link==true)
{
    if(isset($_POST['register_user'])&&$_POST['register_user']==true)
    {
        $chk = "select * from users where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0)
        {
            $fileimage="";
            if ($_FILES['image']['name']!=null)
            {
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/tour_guide/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            
            $sql = "INSERT INTO users (fname,lname,email,type,image,password) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['type']."', '".$fileimage."', '".$_POST['password']."')";
            if(mysqli_query($link,$sql))
            {

                header('location:../forms/login-tg.php?status=success');

            }else{
                header('location:../forms/register-tg.php?status=Connection Error!');
            }
        }else{
            header('location:../forms/register-tg.php?status=Email is Already Exists!');
        }
    }
}
// tour guide register end

// hotel register
if ($link==true){
    if(isset($_POST['register_hm'])&&$_POST['register_hm']==true){ 
        $chk = "select * from hotel where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/hotel/' . uniqid() . time() . '.' . $ext['extension']; 

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            // change
            $sql = "INSERT INTO hotel (name,address,tel,email,image,pw,Description) 
            VALUES ('".$_POST['name']."', '".$_POST['address']."', '".$_POST['tel']."', '".$_POST['email']."', '".$fileimage."', '".$_POST['password']."', '".$_POST['description']."')"; 
            
            if(mysqli_query($link,$sql)){

                header('location:../forms/login-hm.php?status=success'); 

            }else{
                header('location:../forms/register-hm.php?status=Connection Error!'); 
            }
        }else{
            header('location:../forms/register-hm.php?status=Email is Already Exists!'); 
        }
    }
}
// hotel register end

//traveler
if ($link==true){
    if(isset($_POST['register_t'])&&$_POST['register_t']==true){
        $chk = "select * from traveler where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
                        
            $sql = "INSERT INTO traveler (name,tel,email,address,pw) VALUES ('".$_POST['name']."', '".$_POST['tel']."', '".$_POST['email']."', '".$_POST['address']."','".$_POST['pw']."')";
            if(mysqli_query($link,$sql)){

                $ins_id =$link->insert_t_id;

                //header('location:../forms/login-t.php?status=success');
                echo "<script>alert('Registration Successful'); window.location.href='../forms/login-t.php' ;</script>";

            }else{
                //header('location:../forms/register-t.php?status=Connection Error!');
                echo "<script>alert('Connection Error!'); window.location.href='../forms/register-t.php' ;</script>";
            }
        }else{
            //header('location:../forms/register-t.php?status=Email is Already Exists!');
            echo "<script>alert('Email is Already Exists!'); window.location.href='../forms/register-t.php' ;</script>";
        }
    }
}
//traveler register end

//tour_driver
if ($link==true){
    if(isset($_POST['register_td'])&&$_POST['register_td']==true){
        $chk = "select * from tour_driver where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/tour_driver/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            
            $sql = "INSERT INTO tour_driver (name,dob,tel,veh_type,email,pw,image) VALUES ('".$_POST['name']."', '".$_POST['dob']."', '".$_POST['tel']."', '".$_POST['veh_type']."', '".$_POST['email']."', '".$_POST['pw']."', '".$fileimage."')";
            if(mysqli_query($link,$sql)){

                echo "<script>alert('Registration Successful'); window.location.href='../forms/login-td.php' ;</script>";

            }else{
                echo "<script>alert('Connection Error!'); window.location.href='../forms/register-td.php' ;</script>";
            }
        }else{
            echo "<script>alert('Email is Already Exists!'); window.location.href='../forms/register-td.php' ;</script>";
        }
    }
}
//tour_driver register end