<?php
    include("config.php");

    if(isset($_GET['editId'])){
        $id=$_GET['editId'];
        
        $sql = "SELECT * FROM `information` WHERE id='$id'";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="jquery-3.6.3.min.js"></script> -->
    <title>Crud Operation</title>
</head>
<body>
    <center>
        <h1>Crud Operation Using Ajax</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" >
            <label for="">Full Name</label>
            <input type="text" name="fullname" id="fullname" value="<?php //echo $fullname; ?>">
            <?php echo $row['fullname']; ?>
            <br><br>

            <label for="">Email </label>
            <input type="text" name="email" id="email" value="">
            <br><br>

            <label for="">Moblie No</label>
            <input type="text" name="mno" id="mno" value="">
            <br><br>

            <label for="">Gender</label>
            <input type="radio" name="gender" id="gender" value="Male">Male
            <input type="radio" name="gender" id="gender" value="Female">Female
            <input type="radio" name="gender" id="gender" value="Other">Other
            <br><br>

            <label for="">Hobbies</label>
            <input type="checkbox" name="chk[]" id="chk" value="Cooking">Cooking
            <input type="checkbox" name="chk[]" id="chk" value="Reading">Reading
            <input type="checkbox" name="chk[]" id="chk" value="Other">Other
            <br><br>

            <label for="">State</label>
            <input type="text" id="state_id" value="<?php echo $row['state']; ?>">
            <select name="state" id="state">
            <option value="" disabled selected>--Select--</option>
            <?php echo loadState();?>
            </select>
            <?php 
                function loadState(){
                    include("config.php");
                    $str = "";
                    $sql = "select * from state";
                    $query = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($query)){
                        $str .= "<option value=".$row['state_id'].">".$row['state']."</option>";
                    }
                    return $str;
                }
            ?>
            <br><br>
            <label for="">City</label>
            <select name="city" id="city">
                <option value="" disabled selected>--Select--</option>  
            </select>
            <br><br>
            <input type="submit" name="submit" id="submit">
            <button><a href="display.php" style="text decoration:none;">Display</a></button>
        </form>
    </center>
    >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="ajax_script.js"></>
</body>
</html>