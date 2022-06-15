<?php include'connect.php'?>
<?php    
    if ($link==true){
        
        if(isset($_POST['contact_us'])&&$_POST['contact_us']==true)
        {
            $chk = "select * from contact where email='".$_POST['email']."'";
            $result=mysqli_query($link,$chk);
            if ($result->num_rows==0) 
            {
                $sql = "INSERT INTO contact (Full_Name,Email,m_Number,Messages)
                VALUES ('".$_POST['fullname']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['message']."')";

                if(mysqli_query($link, $sql)){
                    
                // $ins_id =$link->insert_mid; 
                    echo "<script>alert('Records added successfully!'); window.location.href='../contactus_page.php' ;</script>";
                } 
                else{
                    echo "<script>alert('ERROR: Could not able to execute!'); window.location.href='../contactus_page.php' ;</script>";
                }
            }
        }
    
    }
    ?>