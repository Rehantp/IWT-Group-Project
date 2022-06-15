<?php
include 'connect.php';

//display data Tour guide

function all_data($link,$user_id){

$sql ="SELECT * From users WHERE  type='Type 1' ORDER BY id DESC";

$result=mysqli_query($link,$sql);

    foreach ($result as $val)
     {
        echo "<br/><br/>
        <div class='card' style='width:100%;'>  

            <div class='row'>
                <div class='column1'>
                    <div style='padding: 2%; padding-left: 75px; padding-top: 30px; padding-bottom: 30px'>
                        <img src='db/".$val['image']."' alt='Avatar' style='width: 65%' />
                    </div> 
                </div>

                <div class='column2'>
                    <div class='container' style='padding-top: 2%;'>
                        <h4><b> ".$val['fname']." ".$val['lname']."</b></h4> 
                        <ul>
                            <li> Email : ".$val['email']."</li>
                            <li> Languages : English</li>
                        </ul>
                        <div style='padding-bottom: 3%; padding-top: 4%;'>
                            <button   class='button-dis' onclick='displaymsg()' style='width: 80%'>View Licence</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

}
