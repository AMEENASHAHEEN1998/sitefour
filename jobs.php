<?php 
        include('init.php');
        session_start();


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $status = $_POST['status'];
        $nationality = $_POST['nationality'];
        $job_title = $_POST['job_title'];
        $study_degree = $_POST['study_degree'];
        $mobile_number = $_POST['mobile_number'];
        $job_type = $_POST['job_type'];
        

        $cvName = $_FILES['cv']['name'];
        $cvSize = $_FILES['cv']['size'];
        $cvTmp = $_FILES['cv']['tmp_name'];
        $cvType = $_FILES['cv']['type'];

        // list of upload file extention allow
        $cvAllowExtention = array("jpeg" ,"pdf","jpg","png");

        // get photo extention
        $tmp = explode(".",$cvName);
        $cvExtention = strtolower(end($tmp));

        $cv = rand(0 , 1000000) . '_' . $cvName;
        move_uploaded_file($cvTmp,'uploads\photo\\' . $cv);
            


            $stmt = $con->prepare("INSERT INTO sitefour.job(name ,age,status,nationality,job_title,study_degree,mobile_number,email , job_type,cv )
                value (:zuser,:zage,:zstatus,:znat,:zjob_title,:zstudy_degree ,:zmobile_number, :zemail ,:zjob_type , :zcv)");
                $stmt->execute(array(
                    'zuser'     => $name,
                    'zage' => $age,
                    'zstatus' => $status,
                    'znat' => $nationality,
                    'zjob_title' => $job_title,
                    'zstudy_degree' => $study_degree,
                    'zmobile_number' => $mobile_number,
                    'zemail'    => $email,
                    'zjob_type'     => $job_type,
                    'zcv' => $cv

                    
                ));
                $Msg = '<div class= "alert alert-success">'.$stmt->rowCount()  . "Job Add Sucessful ".'</div>';
                echo "$Msg";
        }
    
?>

    <div class="container">
        <div class="row " style="margin-top: 30px;">
            <div class="col-lg-8">
                <h2>Perspictive Development</h2>
                <div class="row">
                    <img src="images/page3-img3.jpg" class="col-lg-4" alt="">
                    <div class=" col-lg-8">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt.
                        </p>
                        <p>Dabore et dolore magna aliquyam erat, sed diam voluptua vero
                            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est.
                        </p>
                    </div>
                </div>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</li>
                    <li>Tempor invidunt ut labore et dolore magna aliquyam erat</li>
                    <li>At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea</li>
                    <li>Takimata sanctus est Lorem ipsum dolor sit amet orem ipsum dolor sit amet</li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h2>Our Vocation</h2>
                <ul>
                    <li>Consetetur sadipscing elitr sed/li>
                    <li>Diam nonumy eirmod tempor invidunt</li>
                    <li>Labore et dolore magna aliquyam</li>
                    <li>At vero eos et accusam et justo duo</li>
                    <li>Dolores et ea rebum</li>
                </ul>
            </div>
        </div>

        <div class="row " style="margin-top: 30px;">
            <div class="col-lg-8">
                <h2>Perspictive Development</h2>
                <div class="row">
                    
                    <div class=" col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt.
                        </p>
                        <p>Dabore et dolore magna aliquyam erat, sed diam voluptua vero
                            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est.
                        </p>
                    </div>

                    <div class=" col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt.
                        </p>
                        <p>Dabore et dolore magna aliquyam erat, sed diam voluptua vero
                            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est.
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4" style="margin-top: -100px;">
                <h2>Interive Proccess </h2>
                <img src="images/page4-img2.jpg"  alt="">
                <p>Lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam nonumy eirmod
                    magna aliquyam erat
                </p>
                <p>At vero eos et accusam et justo dolores
                    et ea rebum
                </p>
                <p>Stet clita kasd gubergren, no sea tamata
                    lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam.
                </p>
                <p>Nonumy eirmod tempor invidunt</p>
            </div>
        </div>
<h3>Order Jobs</h3>
<div class="row">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post"  class="col-lg-8 offset-2" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Name :</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Age</label>
        <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="form-group">
    <label  >Status</label>

    <div class="form-check">

    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="single" checked>
    <label class="form-check-label" for="exampleRadios1">
        Single
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="maried">
    <label class="form-check-label" for="exampleRadios2">
        Maried
    </label>
    </div>
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Nationality</label>
    <select class="form-control" id="exampleFormControlSelect1" name="nationality">
        <option value="Palestine">Palestine</option>
        <option value="Eygpt">Eygpt</option>
        <option value="Jorden">Jorden</option>
    </select>
    </div>
    <div class="form-group">
        <label for="job">Job Title :</label>
        <input type="text" name="job_title" class="form-control" id="job" placeholder="">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect2">Study Degree</label>
    <select class="form-control" name="study_degree" id="exampleFormControlSelect2">
        <option value="Bacaloruos">Bacaloruos</option>
        <option value="Master">Master</option>
        <option value="Doctor">Doctor</option>
        <option value="Doblom">Doblom</option>
        
    </select>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input type="number" name="mobile_number" class="form-control" id="mobile" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
    <label  >Job Type</label>

    
    <div class="form-check">

    <input class="form-check-input" type="radio" name="job_type" id="full" value="full" checked>
    <label class="form-check-label" for="full">
        Full Time
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="job_type" id="part" value="part">
    <label class="form-check-label" for="part">
        Part Time
    </label>
    </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1"> CV </label>
        <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <input type="submit" class="btn btn-primary offset-8" value="Submit">

</form>
</div>
</div>
<?php 
    include('template/footer.php');
?>