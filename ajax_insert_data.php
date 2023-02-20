<?php

    include("config.php");

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];
        $gender = $_POST['gender'];
        $chk = implode(',',$_POST['chk']);
        $state = $_POST['state'];
        $city = $_POST['city'];

        $sql = "insert into information(fullname,email,mno,gender,chk,state,city) values('$fullname','$email','$mno','$gender','$chk','$state','$city')";
        $query = mysqli_query($conn,$sql);
        if($query){
            //echo "successful...!";
            header("location:display.php");
        }
?>