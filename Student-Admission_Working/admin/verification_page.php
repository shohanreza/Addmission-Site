<!-- ===============================================
	**** A COMPLETE VALIDATE FORM WITH PHP ****
================================================ -->

<!-- ==============  PHP begin  =================-->
<?php
session_start();
$hscRoll = "";
$hscRegNo = "";
$hscPassingYear = "";
$hscBoard = "";
$sscRoll = "";
$sscRegNo = "";
$sscPassingYear = "";
$sscBoard = "";
$email = "";
$mobNum = "";
$nidNum = "";

$ehscRoll = "";
$ehscRegNo = "";
$ehscPassingYear = "";
$ehscBoard = "";
$esscRoll = "";
$esscRegNo = "";
$esscPassingYear = "";
$eclass = "";
$esscBoard = "";
$eemail = "";
$emobNum = "";
$enidNum = "";
$valid = null;
$message = null;
$er = null;

if (isset($_POST['submit'])) {
	$hscRoll = $_POST['hscRoll'];
	$hscRegNo = $_POST['hscRegNo'];
	$hscPassingYear = $_POST['hscPassingYear'];
	$hscBoard = $_POST['hscBoard'];
	$sscRoll = $_POST['sscRoll'];
	$sscRegNo = $_POST['sscRegNo'];
	$sscPassingYear = $_POST['sscPassingYear'];
	$sscBoard = $_POST['sscBoard'];
	$mobNum = $_POST['mobNum'];
	$nidNum = $_POST['nidNum'];

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}




	$er = 0;


	//-------------------hsc----------------
	if ($hscRoll == "") {
		$er++;
		$ehscRoll = "*Required";
	} else {
		$hscRoll = test_input($hscRoll);
		if (!preg_match("/^[+0-9]*$/", $hscRoll)) {
			$er++;
			$ehscRoll = "*Only numbers are allowed";
		}
	}

	if ($hscRegNo == "") {
		$er++;
		$ehscRoll = "*Required";
	} else {
		$hscRegNo = test_input($hscRegNo);
		if (!preg_match("/^[+0-9]*$/", $hscRegNo)) {
			$er++;
			$ehscRoll  = "*Only numbers are allowed";
		}
	}

	if ($hscPassingYear == "") {
		$er++;
		$ehscPassingYear = "*Required";
	} else {
		$hscPassingYear = test_input($hscPassingYear);
		if (!preg_match("/^[+0-9]*$/", $hscPassingYear)) {
			$er++;
			$ehscPassingYear = "*Only numbers are allowed";
		}
	}


	if (empty($hscBoard)) {
		$er++;
		$ehscBoard = "*Required";
	} else {
		$hscBoard = test_input($hscBoard);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$hscBoard)) {
			$er++;
			$ehscBoard = "*Only letters and white space allowed";
		}
	}

	////-------------------ssc----------------
	//
	//
	if ($sscRoll == "") {
		$er++;
		$esscRoll = "*Required";
	} else {
		$sscRoll = test_input($sscRoll);
		if (!preg_match("/^[+0-9]*$/", $sscRoll)) {
			$er++;
			$esscRoll = "*Only numbers are allowed";
		}
	}

	if ($sscRegNo == "") {
		$er++;
		$esscRegNo = "*Required";
	} else {
		$sscRoll = test_input($sscRoll);
		if (!preg_match("/^[+0-9]*$/", $sscRoll)) {
			$er++;
			$esscRoll = "*Only numbers are allowed";
		}
	}

	if ($sscPassingYear == "") {
		$er++;
		$esscPassingYear = "*Required";
	} else {
		$sscPassingYear = test_input($sscPassingYear);
		if (!preg_match("/^[+0-9]*$/", $sscPassingYear)) {
			$er++;
			$esscPassingYear = "*Only numbers are allowed";
		}
	}
	if ($sscBoard == "") {
		$er++;
		$esscBoard = "*Required";
	} else {
		$sscBoard = test_input($sscBoard);
		if (!preg_match("/^[a-zA-Z ]*$/", $sscBoard)) {
			$er++;
			$esscBoard = "*Only letters and white space allowed";
		}
	}

	//-------------------others----------------

	if (empty($email)) {
		$er++;
		$eemail = "*email is required";
	} else {
		$email = test_input($email);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		  }
	}


	if (empty($mobNum)) {
		$er++;
		$emobNum = "*Required";
	} else {
		$mobNum = test_input($mobNum);
		if (!preg_match("/^[+0-9]*$/", $mobNum)) {
			$er++;
			$emobNum = "*Only numbers are allowed";
		}
	}

	if (empty($nidNum)) {
		$er++;
		$enidNum = "*Required";
	} else {
		$nidNum = test_input($nidNum);
		if (!preg_match("/^[+0-9]*$/", $nidNum)) {
			$er++;
			$enidNum = "*Only numbers are allowed";
		}
	}

	//
	//
	//// Create connection
	//

	if ($er == 0) {
		$cn = mysqli_connect("localhost", "root", "password", "user_list");


		// Check connection
		if ($cn->connect_error) {
			die("Connection failed: " . $cn->connect_error);
		}



		$sql = "INSERT INTO tml_student (hscRoll,hscRegNo,hscPassingYear, hscBoard, sscRoll,sscRegNo,sscPassingYear, sscBoard, email, mobNum, nidNum) VALUES (
							'" . mysqli_real_escape_string($cn, strip_tags($hscRoll)) . "',
							'" . mysqli_real_escape_string($cn, strip_tags($hscRegNo)) . "',
							'" . mysqli_real_escape_string($cn, strip_tags($hscPassingYear)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($hscBoard)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($sscRoll)) . "',
							'" . mysqli_real_escape_string($cn, strip_tags($sscRegNo)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($sscPassingYear)) . "',  
							'" . mysqli_real_escape_string($cn, strip_tags($sscBoard)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($email)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($mobNum)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($nidNum)) . "'
							)";

		if (mysqli_query($cn, $sql)) {
			$valid = true;
		} else {
			$message = mysqli_error($cn);
			$valid = false;
		}
		mysqli_close($cn);
	} 
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



//================================ PHP End =============================	
?>



<?php include '../component/header.php'; ?>
<!--=========================== Content-area ============================-->


<div class="container text-center">
	<?php
	if ($valid) {
		echo '<span class = "successMessage">Data saved into system.</span>';
		$hscRoll = "";
		$hscRegNo = "";
		$hscPassingYear = "";
		$hscBoard = "";
		$sscRoll = "";
		$sscRegNo = "";
		$sscPassingYear = "";
		$sscBoard = "";
		$email = "";
		$mobNum = "";
		$nidNum = "";
		header("Location: message_page.php");
	} else {
		echo '<span class= "errorMessage">' . $message . '</span>';
	}
	if ($er != 0) {
		echo '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
	}
	?>

</div>

<div class="form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="post">
					<div class="section-title">
						<h3 style="margin-top:100px;">Verification form</h3>
						<h6 class="text-center alert alert-success mt-5">HSC Information</h6>
						<div class="row text-center">
							<div class="col-md-3">
								<h5><label for="hscRoll">HSC Roll No:</label>
									<span class="error"><?php echo $ehscRoll; ?></span>
								</h5>
								<p><input type="text" name="hscRoll" value="<?php echo $hscRoll; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="hscRegNo">Registration No:</label>
									<span class="error"><?php echo $ehscRegNo; ?></span>
								</h5>
								<p><input type="text" name="hscRegNo" value="<?php echo $hscRegNo; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="hscPassingYear">Passing Year:</label>
									<span class="error"><?php echo $ehscPassingYear; ?></span>
								</h5>
								<p><input type="text" name="hscPassingYear" value="<?php echo $hscPassingYear; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="hscBoard">Board:</label>
									<span class="error"><?php echo $ehscBoard; ?></span>
								</h5>
								<p><input type="text" name="hscBoard" value="<?php echo $hscBoard; ?>"></p>
							</div>
							
						</div>


						<h6 class="text-center alert alert-success mt-5">SSC Information</h6>
						<div class="row text-center">
							<div class="col-md-3">
								<h5><label for="sscRoll">SSC Roll No:</label>
									<span class="error"><?php echo $esscRoll; ?></span>
								</h5>
								<p><input type="text" name="sscRoll" value="<?php echo $sscRoll; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="sscRegNo">Registration No:</label>
									<span class="error"><?php echo $esscRegNo;?></span>
								</h5>
								<p><input type="text" name="sscRegNo" value="<?php echo $sscRegNo; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="sscPassingYear">Passing Year:</label>
									<span class="error"><?php echo $esscPassingYear; ?></span>
								</h5>
								<p><input type="text" name="sscPassingYear" value="<?php echo $sscPassingYear; ?>"></p>
							</div>
							<div class="col-md-3">
								<h5><label for="sscBoard">Board:</label>
									<span class="error"><?php echo $esscBoard; ?></span>
								</h5>
								<p><input type="text" name="sscBoard" value="<?php echo $sscBoard; ?>"></p>
							</div>
						</div>

						<h6 class="text-center alert alert-success mt-5">Other Information</h6>
						<div class="row text-center">
							<div class="col-md-4">
								<h5><label for="email">Email Address:</label>
									<span class="error"><?php echo $eemail; ?></span>
								</h5>
								<p><input type="text" name="email" value="<?php echo $email; ?>"></p>
							</div>
							<div class="col-md-4">
								<h5><label for="mobNum">Mobile Number:</label>
									<span class="error"><?php echo $emobNum; ?></span>
								</h5>
								<p><input type="text" name="mobNum" value="<?php echo $mobNum; ?>"></p>
							</div>
							<div class="col-md-4">
								<h5><label for="nidNum">NID Number:</label>
									<span class="error"><?php echo $enidNum; ?></span>
								</h5>
								<p><input type="text" name="nidNum" value="<?php echo $nidNum; ?>"></p>
							</div>


							<div class="d-flex justify-content-center">
								<input class="btn btn-success" type="submit" name="submit" value="Submit" />
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<a href="message_page.php" type="button" class="mt-5 mb-5 btn btn-success btn-lg float-right">Verify Information</a>
<?php include '../component/footer.php'; ?>
<!-- 
<p><input type="submit" name="submit" value="Submit"></p>	 -->