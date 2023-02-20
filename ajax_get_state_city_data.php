<?php

    include("config.php");
    $str = "";
    $sql = "select * from cities where state_id = '".$_POST['stateId']."'";
    $query = mysqli_query($conn,$sql);

    echo "<option>--Select--</option>";
    while($row=mysqli_fetch_assoc($query)){
        $str .= "<option value=".$row['city_id'].">".$row['city']."</option>";
    }
    echo $str;
    
?>