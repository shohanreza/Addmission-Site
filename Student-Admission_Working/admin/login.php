<?php

$db = mysqli_connect("localhost", "root", "password", "user_list");
session_start();
$_SESSION['login'] = false;



if($_SESSION['login']){   
    header('Location: register.php');
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
   // $password = md5(mysqli_real_escape_string($db, $_POST['password']));
    $_SESSION['usermail'] = $email;

    if ($email != "" && $password != "") {
        $sql = "select count(*) as cntUser from autousers where email='$email' and password='$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['login'] = true;
            header('Location: register.php');
        } else {
            echo "Invalid username and password";
        }
    }
}





?>

<!-- -------------------html-------------  -->


<?php include '../component/header.php'; ?>
<div class="container">
    <div class="row">
        <form method="POST" action="" class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php include '../component/footer.php'; ?>


<!-- -------------------html-------------  -->