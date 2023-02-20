<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
        <center>
        <h1>Display Data using Ajax</h1>
        <table border="1 solid" >
                <tr>
                    <td>Id</td>
                    <td>Full Name</td>
                    <td>Email</td>
                    <td>Moblie No</td>
                    <td>Gender</td>
                    <td>Hobbies</td>
                    <td>State</td>
                    <td>City</td>
                    <td>Operation</td>
                </tr>
            <?php

                $sql = "select * from information";
                $query = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($query)){
                    $id=$row['id'];
                    $fullname=$row['fullname'];
                    $email=$row['email'];
                    $mno=$row['mno'];
                    $gender=$row['gender'];
                    $chk=$row['chk'];
                    $state=$row['state'];
                    $city=$row['city'];

                    echo "
                        <tr>
                            <td>".$id."</td>
                            <td>".$fullname."</td>
                            <td>".$email."</td>
                            <td>".$mno."</td>
                            <td>".$gender."</td>
                            <td>".$chk."</td>
                            <td>".$state."</td>
                            <td>".$city."</td>
                            <td>
                                <button><a href='update.php?editId=".$id."'>Edit</a></button>
                                <button><a href=''>Delete</a></button>
                            </td>
                        </tr>
                        ";
                }
            ?>
        </table>
        </center>
</body>
</html>