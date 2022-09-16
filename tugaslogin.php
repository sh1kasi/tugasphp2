<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            // login siswa
            if($_POST["username"] == "siswa" && 
            $_POST["password"] == "1234"){
                header("Location: datasiswa.php");
                exit;
            }

            // login admin
            else if($_POST["username"] == "admin" &&
            $_POST["password"] == "admin123"){
                header("Location: dataadmin.php ");
                

                } else {
                    $error = true;
                }
            } else {
                $kosong = true; 
            }
        }
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>

    <h2>LOGIN USER</h2>

    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username">
        <br>
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
        <br>
        <br>
        <?php
        
        if(isset($error)){
            echo "Username atau password salah!";
        }
        if(isset($kosong)){
            echo "Isi kolom dengan benar!";
        }
        
        ?>
        <br>
        <br>
        <button type="submit" name="submit">Login</button>
        
    </form>
</body>
</html>