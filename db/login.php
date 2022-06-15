<?php
include 'connect.php';

//travel agent login
if ($link==true){
    if(isset($_POST['login_ta'])&&$_POST['login_ta']==true)
    { 
        $chk = "select * from travel_agent where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1)
        
        {
            $pass="";
            $email="";
            foreach ($result as $data){
                $pass=$data['password'];
                $id=$data['ta_id']; 
                $email=$data['email'];
            }
            if ($pass==$_POST['password']){

                $_SESSION['ta_id']=$id;
                $_SESSION['email']=$email;
                if($email==$data['email']){
                    echo "<script>alert('You are logged In!'); window.location.href='../travel_agent_profile.php' ;</script>";
                }else{
                echo "<script>alert('Invalid Email and Password!'); window.location.href='../forms/login-ta.php' ;</script>";
                }

            }else{
                echo "<script>alert('Invalid Password!'); window.location.href='../forms/login-ta.php' ;</script>";
            }
        }else{
            echo "<script>alert('No records!'); window.location.href='../forms/login-ta.php' ;</script>";
        }
    }    
}
//travel agent login end

//tour guide login
if ($link==true)
{
    if(isset($_POST['login_user'])&&$_POST['login_user']==true)
    
    {
        $chk = "select * from users where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);

        if ($result->num_rows==1)
        
        {
            $pass="";
            $email="";
            $userType="";
             
            foreach ($result as $data)
            
            {
                $pass=$data['password'];
                $id=$data['id'];
                $userType=$data['type'];
                $email=$data['email'];
            }
            if ($pass==$_POST['password'])
            {

                $_SESSION['user_id']=$id;
                $_SESSION['type']=$userType;
                $_SESSION['email']=$email;


                if($userType=="Type 1")
                {
                    header('location:../welcome.php?status=success ');
                }else if($userType=="Type 2"){
                    header('location:../welcome.php?status=success');


                }
            }else{
                header('location:../forms/login-tg.php?status=Invalid Password!');
            }
        }else{
            header('location:../forms/login-tg.php?status=No records!');
        }
    }
}
//tour guide login end

//Hotel login
if ($link==true){
    if(isset($_POST['login_hm'])&&$_POST['login_hm']==true)
    
    { 
        $chk = "select * from hotel where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1){
            $pass="";
            $email="";
            foreach ($result as $data)
            
            {
                $pass=$data['pw'];
                $id=$data['hid']; 
                $email=$data['email'];
            }
            if ($pass==$_POST['password']
            
            
            ){

                $_SESSION['hid']=$id;
                $_SESSION['email']=$email;
                if($email==$data['email'])
                
                {
                    echo "<script>alert('You are logged In!'); window.location.href='../hotel Manager_profile.php' ;</script>";
                }else{
                echo "<script>alert('Invalid Email and Password!'); window.location.href='../forms/login-hm.php' ;</script>";
                }

            }else
            {
                echo "<script>alert('Invalid Password!'); window.location.href='../forms/login-hm.php' ;</script>";
            }
        }else{
            echo "<script>alert('No records!'); window.location.href='../forms/login-hm.php' ;</script>";
        }
    }    
}
//hotel login end

//traveler login
if ($link==true){
    if(isset($_POST['login_t'])&&$_POST['login_t']==true){ 
        $chk = "select * from traveler where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1){
            $pass="";
            $email="";
            foreach ($result as $data){
                $pass=$data['pw'];
                $id=$data['t_id']; 
                $email=$data['email'];
            }
            if ($pass==$_POST['pw']){

                $_SESSION['t_id']=$id;
                $_SESSION['email']=$email;
                if($email==$data['email']){
                    echo "<script>alert('You are logged In!'); window.location.href='../home.php' ;</script>";
                }else{
                echo "<script>alert('Invalid Email and Password!'); window.location.href='../forms/login-t.php' ;</script>";
                }

            }else{
                echo "<script>alert('Invalid Password!'); window.location.href='../forms/login-t.php' ;</script>";
            }
        }else{
            echo "<script>alert('No records!'); window.location.href='../forms/login-t.php' ;</script>";
        }
    }    
}

//traveler user login end

//Tour driver login
if ($link==true){
    if(isset($_POST['login_td'])&&$_POST['login_td']==true){ 
        $chk = "select * from tour_driver where email='".$_POST['email']."'"; 
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1){
            $pass="";
            $email="";
            foreach ($result as $data){
                $pass=$data['pw'];
                $id=$data['td_id']; 
                $email=$data['email'];
            }
            if ($pass==$_POST['pw']){

                $_SESSION['td_id']=$id;
                $_SESSION['email']=$email;
                if($email==$data['email']){
                    echo "<script>alert('You are logged In!'); window.location.href='../tour_driver_profile.php' ;</script>";
                }else{
                echo "<script>alert('Invalid Email and Password!'); window.location.href='../forms/login-td.php' ;</script>";
                }

            }else{
                echo "<script>alert('Invalid Password!'); window.location.href='../forms/login-td.php' ;</script>";
            }
        }else{
            echo "<script>alert('No records!'); window.location.href='../forms/login-td.php' ;</script>";
        }
    }    
}
//tour driver login end