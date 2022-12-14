<?php
    session_start();
    include('config/dblink.php');
    $collect = new Kiri();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/kiri/"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
        <title>Kiri Hospital</title>
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/jpg" href="assets/proPic.png">
        <link rel="stylesheet" href="./styles/bootstrap.css">
        <link rel="stylesheet" href="./styles/stylesheet.css">
    </head>
    <body style="background:#abc;">

        

    <!-- ============ Carosuel Container ============ -->
    <!-- ============ Login Parent Container ============ -->
    <div class="carosuelContainer">

        <!-- ============ Login Box ============ -->
        <div class="loginBox">
            <h2>Kiri's Hospital</h2>

            <!-- ============ Main Login Box ============ -->
            <div class="mainLoginBox">

                <!-- ============ Login Form ============ -->
                <form action="login.php" method="POST">

                    <label for="name">Username:</label>
                    <input type="text" id="name" name="uname">

                    <label for="pword">Password:</label>
                    <input type="password" id="pword" name="pword">

                    <input type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </div>

<!-- ============ Including Footer ============ -->
<?php include('includes/footer.php'); ?>

<!-- ============ PHP Connection For Login ============ -->
<?php
    
    if($_POST['login']){
        extract($_POST);
        $tblquery = "SELECT * FROM users WHERE uname = :uname && pword = :pword";
        $tblvalue = array(
            ':uname' => htmlspecialchars($uname),
            ':pword' => htmlspecialchars($pword)
        );
        $select = $collect->tbl_select($tblquery, $tblvalue);
        if($select){
            foreach($select as $data){
                extract($data);
                $_SESSION['userId'] = $id;
                $_SESSION['uname'] = $uname;

                
                header('Location: dashboard');
                echo '<script> window.location="dashboard"; </script>';
            }
        }else{
            echo "<script>alert('Oops, look like your Username or password is not correct.');</script>";
        }
    }
?>

