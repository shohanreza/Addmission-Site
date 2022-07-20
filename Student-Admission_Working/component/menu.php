
<ul>
    <li><a href="../index.php">home</a></li>
    <!-- <li><a href="?a=student_add">admission</a></li> -->
    <?php if(!$_SESSION['login']){ ?>
        <li><a href="../admin/login.php">Login</a></li>

    <?php }elseif($_SESSION['login']){ ?>
        <li><a href="../admin/register.php">Register</a></li>
        <li><a href="../admin/logout.php">Logout</a></li>
    <?php } ?>
    <!-- <li><a href="">contact us</a></li> -->
</ul>
