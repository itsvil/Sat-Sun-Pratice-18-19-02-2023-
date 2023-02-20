<?php
    include("config.php");

    
    $sql = "select * from state";
    $query = mysqli_query($conn,$sql);
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value=".$row['state_id'].">".$row['state']."</option>";
    }

    echo $str;
?>