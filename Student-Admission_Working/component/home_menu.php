<ul>
    <li><a href="">home</a></li>
    <!-- <li><a href="?a=student_add">admission</a></li> -->
    <?php if(!$_SESSION['login']){ ?>
        <li><a href="./admin/login.php">Login</a></li>
        <!-- <li><a href="../admin/register.php">Register</a></li> -->

    <?php }else{ ?>
        <li><a href="./admin/register.php">Register</a></li>
        <li><a href="./admin/logout.php">Logout</a></li>
    <?php } ?>
    <!-- <li><a href="admin/login.php">Login</a></li>
    <li><a href="admin/register.php">Register</a></li> -->
    <!-- <li><a href="">contact us</a></li> -->
</ul>
