<?php

$db = mysqli_connect("localhost", "root", "password", "user_list");
session_start();
$myvar = $_SESSION['usermail']; 
$name           = "";
$dob            = ""; 
$pob            = "";
$nationality    = "";
$language       = "";
$gender         = "";
$marital_status = "" ;
$nid            = ""; 
$religion       = ""; 
$blood_group    = ""; 
$email          = ""; 
$mobile         = "";
$quota          = "";
$hsc_exam       = "";
$hsc_board      = "";
$hsc_institute  = "";
$hsc_roll       = "";
$hsc_group      = "";
$hsc_division   = "";
$hsc_gpa        = "";
$hsc_gpa_without_4th = "";
$hsc_marks      = "";
$hsc_exam_year  = "";
$ssc_exam       = "";
$ssc_board      = "";
$ssc_institute  = "";
$ssc_roll       = "";
$ssc_group      = "";
$ssc_division   = "";
$ssc_gpa        = "";
$ssc_gpa_without_4th = "";
$ssc_marks      = "";
$ssc_exam_year  = "";

$error = 0;

function input_validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['name'])){
        $name = mysqli_real_escape_string($db, input_validation($_POST['name']));
    }else{
        $nameErr = "Name is required";
    }
    if(!empty($_POST['dob'])){
        $dob = mysqli_real_escape_string($db, input_validation($_POST['dob']));
    }else{
        $dobErr = "Date of Birth is required";
    }

    if(!empty($_POST['pob'])){
        $pob = mysqli_real_escape_string($db, input_validation($_POST['pob']));
    }else{
        $nameErr = "Name is required";
    }

    if(!empty($_POST['nationality'])){
        $nationality = mysqli_real_escape_string($db, input_validation($_POST['nationality']));
    }else{
        $nameErr = "Name is required";
    }

    if(!empty($_POST['language'])){
        $language       = mysqli_real_escape_string($db, input_validation($_POST['language']));
    }
    
    if(!empty($_POST['gender'])){
        $gender         = mysqli_real_escape_string($db,input_validation($_POST['gender'])); 
    }

    if(!empty($_POST['marital_status'])){
        $marital_status         = mysqli_real_escape_string($db,input_validation($_POST['marital_status'])); 
    }
    if(!empty($_POST['nid'])){
        $nid         = mysqli_real_escape_string($db,input_validation($_POST['nid'])); 
    }
    if(!empty($_POST['religion'])){
        $religion         = mysqli_real_escape_string($db,input_validation($_POST['religion'])); 
    }
    if(!empty($_POST['blood_group'])){
        $blood_group         = mysqli_real_escape_string($db,input_validation($_POST['blood_group'])); 
    }
    if(!empty($_POST['email'])){
        $email         = mysqli_real_escape_string($db,input_validation($_POST['email'])); 
    }
    if(!empty($_POST['mobile'])){
        $gender         = mysqli_real_escape_string($db,input_validation($_POST['mobile'])); 
    }
    if(!empty($_POST['quota'])){
        $mobile         = mysqli_real_escape_string($db,input_validation($_POST['quota'])); 
    }
    if(!empty($_POST['hsc_exam'])){
        $hsc_exam         = mysqli_real_escape_string($db,input_validation($_POST['hsc_exam'])); 
    }
    if(!empty($_POST['hsc_board'])){
        $hsc_board         = mysqli_real_escape_string($db,input_validation($_POST['hsc_board'])); 
    }
    if(!empty($_POST['hsc_institute'])){
        $hsc_institute         = mysqli_real_escape_string($db,input_validation($_POST['hsc_institute'])); 
    }
    if(!empty($_POST['hsc_roll'])){
        $hsc_roll         = mysqli_real_escape_string($db,input_validation($_POST['hsc_roll'])); 
    }
    if(!empty($_POST['hsc_group'])){
        $hsc_group         = mysqli_real_escape_string($db,input_validation($_POST['hsc_group'])); 
    }
    if(!empty($_POST['hsc_division'])){
        $hsc_division         = mysqli_real_escape_string($db,input_validation($_POST['hsc_division'])); 
    }
    if(!empty($_POST['hsc_gpa'])){
        $hsc_gpa         = mysqli_real_escape_string($db,input_validation($_POST['hsc_gpa'])); 
    }
    if(!empty($_POST['hsc_gpa_without_4th'])){
        $hsc_gpa_without_4th         = mysqli_real_escape_string($db,input_validation($_POST['hsc_gpa_without_4th'])); 
    }
    if(!empty($_POST['hsc_marks'])){
        $hsc_marks         = mysqli_real_escape_string($db,input_validation($_POST['hsc_marks'])); 
    }
    if(!empty($_POST['hsc_exam_year'])){
        $hsc_exam_year         = mysqli_real_escape_string($db,input_validation($_POST['hsc_exam_year'])); 
    }

    if(!empty($_POST['ssc_exam'])){
        $ssc_exam         = mysqli_real_escape_string($db,input_validation($_POST['ssc_exam'])); 
    }

    if(!empty($_POST['ssc_board'])){
        $ssc_board         = mysqli_real_escape_string($db,input_validation($_POST['ssc_board'])); 
    }

    if(!empty($_POST['ssc_institute'])){
        $ssc_institute         = mysqli_real_escape_string($db,input_validation($_POST['ssc_institute'])); 
    }

    if(!empty($_POST['ssc_roll'])){
        $ssc_roll         = mysqli_real_escape_string($db,input_validation($_POST['ssc_roll'])); 
    }

    if(!empty($_POST['ssc_group'])){
        $ssc_group         = mysqli_real_escape_string($db,input_validation($_POST['ssc_group'])); 
    }

    if(!empty($_POST['ssc_division'])){
        $ssc_division         = mysqli_real_escape_string($db,input_validation($_POST['ssc_division'])); 
    }
    if(!empty($_POST['ssc_gpa'])){
        $ssc_gpa         = mysqli_real_escape_string($db,input_validation($_POST['ssc_gpa'])); 
    }
    if(!empty($_POST['ssc_gpa_without_4th'])){
        $ssc_gpa_without_4th         = mysqli_real_escape_string($db,input_validation($_POST['ssc_gpa_without_4th'])); 
    }
    if(!empty($_POST['ssc_marks'])){
        $ssc_marks         = mysqli_real_escape_string($db,input_validation($_POST['ssc_marks'])); 
    }

    if(!empty($_POST['ssc_exam_year'])){
        $ssc_exam_year         = mysqli_real_escape_string($db,input_validation($_POST['ssc_exam_year'])); 
    }

   

    $sql = "INSERT INTO `register_student`(`name`, `dob`, `pob`, `nationality`, `language`, `gender`, `marital_status`, `nid`, `religion`, `blood_group`, `email`, `mobile`, `quota`, `hsc_exam`, `hsc_board`, `hsc_institute`, `hsc_roll`, `hsc_group`, `hsc_division`, `hsc_gpa`, `hsc_gpa_without_4th`, `hsc_marks`, `hsc_exam_year`, `ssc_exam`, `ssc_board`, `ssc_institute`, `ssc_roll`, `ssc_group`, `ssc_division`, `ssc_gpa`, `ssc_gpa_without_4th`, `ssc_marks`, `ssc_exam_year`) VALUES ('$name','$dob','$pob','$nationality','$language','$gender','$marital_status','$nid','$religion','$blood_group','$email','$mobile','$quota','$hsc_exam','$hsc_board','$hsc_institute','$hsc_roll','$hsc_group','$hsc_division','$hsc_gpa','$hsc_gpa_without_4th','$hsc_marks','$hsc_exam_year','$ssc_exam','$ssc_board','$ssc_institute','$ssc_roll','$ssc_group','$ssc_division','$ssc_gpa','$ssc_gpa_without_4th','$ssc_marks','$ssc_exam_year')";
    if(mysqli_query($db,$sql)){
        echo "Records inserted successfully.";
        // header("location: welcome.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
    
}

 
?>

<!-- -------------------html-------------  -->


<?php include '../component/header.php'; ?>
<?php
        $email = mysqli_real_escape_string($db,$myvar);
		$sql = "SELECT * from autousers where email= '$email'";
		$query = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($query);
        
			
?>

<div class="container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >
        <div class="row">
            <div class="col-md-12">
            <div class="form-group row">
            <label for="inputFullName" class="col-sm-2 col-form-label pl-0">Full Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFullName" name="name" required value="<?php echo $result["name"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDOB" class="col-sm-2 col-form-label pl-0">Date of Birth:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputDOB" name="dob" required value="<?php echo $result["dob"];?>">
            </div>
            <label for="inputPOB" class="col-sm-2 col-form-label">Place of Birth:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputPOB" name="pob" required value="<?php echo $result["pob"];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputNationality" class="col-sm-2 col-form-label pl-0 ">Father Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputNationality" name="nationality" required value="<?php echo $result["fathername"];?>">
            </div>
            <label for="inputMT" class="col-sm-2 col-form-label">Mother Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputMT" name="language" required value="<?php echo $result["mothername"];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputG" class="col-sm-2 col-form-label pl-0">Gender:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputG" name="gender" required>
            </div>
            <label for="inputMS" class="col-sm-2 col-form-label">Nationality:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputMS" name="marital_status" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputNID" class="col-sm-2 col-form-label pl-0">National ID No:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputNID" name="nid" required value="<?php echo $result["nidno"];?>">
            </div>
            <label for="inputR" class="col-sm-2 col-form-label">Religion:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputR" name="religion" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputBG" class="col-sm-2 col-form-label pl-0">Blood Group:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputBG" name="blood_group" required>
            </div>
            <label for="inputE" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputE" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputMbl" class="col-sm-2 col-form-label pl-0">Mobile:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputMbl" name="mobile" required>
            </div>
            <label for="inputQ" class="col-sm-2 col-form-label ">Quota:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control pl-0" id="inputQ" name="quota" required>
            </div>
        </div>

            </div>
        </div>
        <div class="row">
            
            <div class="col-md-5">
                <div class="d-flex justify-content-center">
                    <h2>HSC Information</h2>
                </div>
                <div class="form-group row">
                    <label for="inputHET" class="col-sm-2 col-form-label pl-0">Exam Type:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  mb-0" id="inputHET" name="hsc_exam" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHEB" class="col-sm-2 col-form-label pl-0">Education Board:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  mb-0" id="inputHEB" name="hsc_board" required>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputHI" class="col-sm-2 col-form-label pl-0">Institute:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHI" name="hsc_institute" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputHRN" class="col-sm-2 col-form-label pl-0">Roll Number:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHRN" name="hsc_roll" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHGS" class="col-sm-2 col-form-label pl-0">Group or Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHGS" name="hsc_group" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHDC" class="col-sm-2 col-form-label pl-0">Division/Class:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHDC" name="hsc_division" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHGPA" class="col-sm-2 col-form-label pl-0">GPA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHGPA" name="hsc_gpa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHGPA4" class="col-sm-2 col-form-label pl-0">GPA Without 4th Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHGPA4" name="hsc_gpa_without_4th" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHM" class="col-sm-2 col-form-label pl-0">Marks (For O-Level):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHM" name="hsc_marks" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHEY" class="col-sm-2 col-form-label pl-0">Exam Year:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputHEY" name="hsc_exam_year" required>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>

            <div class="col-md-5">
                <div class="d-flex justify-content-center">
                    <h2>SSC Information</h2>
                </div>
                
                <div class="form-group row">
                    <label for="inputSET" class="col-sm-2 col-form-label pl-0">Exam Type:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSET" name="ssc_exam" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSEB" class="col-sm-2 col-form-label pl-0">Education Board:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSEB" name="ssc_board" required>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputSI" class="col-sm-2 col-form-label pl-0">Institute:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSI" name="ssc_institute" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputSRN" class="col-sm-2 col-form-label pl-0">Roll Number:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSRN" name="ssc_roll" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSGS" class="col-sm-2 col-form-label pl-0">Group or Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSGS" name="ssc_group" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSDC" class="col-sm-2 col-form-label pl-0">Division/Class:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSDC" name="ssc_division" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSGPA" class="col-sm-2 col-form-label pl-0">GPA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSGPA" name="ssc_gpa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSGPA4" class="col-sm-2 col-form-label pl-0">GPA Without 4th Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSGPA4" name="ssc_gpa_without_4th" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSM" class="col-sm-2 col-form-label pl-0">Marks (For O-Level):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSM" name="ssc_marks" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSEY" class="col-sm-2 col-form-label pl-0">Exam Year:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-0" id="inputSEY" name="ssc_exam_year" required>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </div>
    </form>
</div>


<?php include '../component/footer.php'; ?>


<!-- -------------------html-------------  -->