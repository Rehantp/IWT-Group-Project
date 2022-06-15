<?php
include 'connect.php';

//update
if ($link==true){
    if(isset($_POST['register_ta'])&&$_POST['register_ta']==true){ 

        $chk = "select * from travel_agent where email='".$_POST["email"]."'"; 
        $result=mysqli_query($link,$chk);
        $row = $result->fetch_assoc();
        echo $row["email"];
        if ($result->num_rows==0||($row["email"]==$_POST['email'])){

            //GET DB Data 
            $id = $_POST['ta_id'];
            $name = $_POST['name'];
            $regno = $_POST['regno'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            
            //image update
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/travel_agent/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            //image update end
            
            //update data
            if($fileimage==""){
                $sql = "UPDATE travel_agent SET name= '$name',regno='$regno',email='$email',tel='$tel', address='$address', password='$password' Where hid='$id'";
            }else{
                $sql = "UPDATE travel_agent SET name= '$name',regno='$regno',email='$email',tel='$tel', address='$address', password='$password',image='".$fileimage."' Where ta_id ='".$_POST['ta_id']."'";
            }
            //update data end

            //directing updated data to DB
            if(mysqli_query($link,$sql)){

                // header('location:../edit.php?status=success');
                echo "<script>alert('Update Successful!'); window.location.href='../travel_agent_profile.php' ;</script>"; 

            }else{
                // header('location:../edit.php?status=Connection Error!');
                echo "<script>alert('Connection Error!'); window.location.href='../update/edit-ta.php' ;</script>";
            }
        }else{
            header('location:../edit.php?status=Email is Already Exists!');
            echo "<script>alert('Email is Already Exists!'); window.location.href='../update/edit-ta.php' ;</script>";
        }
    }
}
//travel agent update end



//tour guide update

//check db connection
if ($link==true)
{   
    //get data from form method
    if(isset($_POST['register_user'])&&$_POST['register_user']==true)
    {
        
        //checking
        $chk = "select * from users where email='".$row["email"]."'";

        $result=mysqli_query($link,$chk);

        $row = $result->fetch_assoc();

        echo $row["email"];


        if ($result->num_rows==0||($row["email"]==$_POST['email']))
        {
            $fileimage="";
            //new image
            if ($_FILES['image']['name']!=null)
            
            {
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/tour_guide/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }

            if($fileimage=="")
            {
                $sql = "UPDATE users SET fname= '".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."',type='".$_POST['type']."',password='".$_POST['password']."' Where id='".$_POST['id']."'";
            }else{
                $sql = "UPDATE users SET fname= '".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."',type='".$_POST['type']."',password='".$_POST['password']."',image='".$fileimage."' Where id='".$_POST['id']."'";
            }
            
            if(mysqli_query($link,$sql)){

                header('location:../welcome.php?status=success');

            }else{
                header('location:../update/edit-tg.php?status=Connection Error!');
            }
        }else{
            header('location:../update/edit-tg.php?status=Email is Already Exists!');
        }
    }
}
//tour guide update end

//hotel update
if ($link==true){
    if(isset($_POST['register_hm'])&&$_POST['register_hm']==true){ 

        $chk = "select * from hotel where email='".$_POST["email"]."'"; 
        $result=mysqli_query($link,$chk);
        $row = $result->fetch_assoc();
        if ($result->num_rows==0||($row["email"]==$_POST['email'])){

        //GET DB Data 
        $id = $_POST['hid'];
        $name=$_POST["name"];
        $address=$_POST["address"];
        $email = $_POST['email'];
        $tel=$row["tel"];
        // $image=$row["image"];
        $password = $_POST['password'];
        $Description=$_POST["description"];
            
            //image update
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/hotel/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            //image update end
            
            //update data
            if($fileimage==""){
                $sql = "UPDATE hotel SET name= '$name',email='$email',tel='$tel',pw='$password', description='$Description' Where hid='$id'";
            }else{
                $sql = "UPDATE hotel SET name= '$name',email='$email',tel='$tel',pw='$password', description='$Description',image='".$fileimage."' Where hid = '$id'";
            }
            //update data end

            //directing updated data to DB
            if(mysqli_query($link,$sql)){


                echo "<script>alert('Update Successful!'); window.location.href='../hotel Manager_profile.php' ;</script>"; 

            }else{
                echo "<script>alert('Connection Error!'); window.location.href='../update/edit-hm.php' ;</script>";
            }
        }else{
            echo "<script>alert('Email is Already Exists!'); window.location.href='../update/edit-hm.php' ;</script>";
        }
    }
}
//hotel update end

//Tour driver update
if ($link==true){
    if(isset($_POST['register_td'])&&$_POST['register_td']==true){ 

        $chk = "select * from tour_driver where email='".$_POST["email"]."'"; 
        $result=mysqli_query($link,$chk);
        $row = $result->fetch_assoc();
        echo $row["email"];
        if ($result->num_rows==0||($row["email"]==$_POST['email'])){

            //GET DB Data 
            $id = $_POST['td_id'];
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $tel = $_POST['tel'];
            $veh_type = $_POST['veh_type'];
            $email = $_POST['email'];
            $pass = $_POST['pw'];
            $image = $_POST['image'];
        
            
            //image update
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/tour_driver/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            //image update end
            
            //update data
            if($fileimage==""){
                $sql = "UPDATE tour_driver SET name= '$name',dob='$dob',tel='$tel',veh_type='$veh_type',email='$email', pw='$pass' Where td_id='$id'";
            }else{
                $sql = "UPDATE tour_driver SET name= '$name',dob='$dob',tel='$tel',veh_type='$veh_type',email='$email', pw='$pass',image='".$fileimage."' Where td_id ='".$_POST['td_id']."'";
            }
            //update data end

            //directing updated data to DB
            if(mysqli_query($link,$sql)){

                echo "<script>alert('Update Successful!'); window.location.href='../tour_driver_profile.php' ;</script>"; 

            }else{
                echo "<script>alert('Connection Error!'); window.location.href='../update/tour_driver_edit.php' ;</script>";
            }
        }else{
            echo "<script>alert('Email is Already Exists!'); window.location.href='../update/tour_driver_edit.php' ;</script>";
        }
    }
}
//Tour driver update end