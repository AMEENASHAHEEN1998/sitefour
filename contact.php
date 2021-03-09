<?php 
    include('init.php');
    
    $noNavbar = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $formErrors = array();
        if(strlen($name) < 4){
            $formErrors[] = " اسم المستخدم لا يجب أن يكون أقل من 4 حروف ";
        }
        if(strlen($name) > 20){
            $formErrors[] = " اسم المستخدم لا يتجاوز 20 حرف ";
        }
        if(empty($name)){
            $formErrors[] = "Name Is Empty ";
        }
        if(empty($email)){
            $formErrors[] = "Email Is Empty ";
        }
        if(empty($message)){
            $formErrors[] = "Message Is Empty";
        }
        foreach($formErrors as $error){
            echo "<div class = 'alert alert-danger'>" .$error."</div>" ;
        }

        // check if is there no error in update process
        if(empty($formErrors)){

            $stmt = $con->prepare("INSERT INTO sitefour.contact(name ,email , message )
                value (:zuser,:zemail ,:zmessage)");
                $stmt->execute(array(
                    'zuser'     => $name,
                    'zemail'    => $email,
                    'zmessage'     => $message

                    
                ));
                $Msg = '<div class= "alert alert-success">'.$stmt->rowCount()  . "Contact Add Sucessful ".'</div>';
                echo "$Msg";
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2>Contact Form</h2>
            <h6>Hello !! You can send message to us.</h6>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name :</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Please enter your name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="youremail@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="Message">Message :</label>
                <textarea name="message" id="message" class="form-control"  cols="30" rows="10" placeholder="Please enter your message" required></textarea>
                
            </div>
            <input type="submit" class="btn btn-primary offset-8" value="Submit">

            </form>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-6" >
                    <h3>Tell your frind <a href="">about our caffe</a> </h3>
                </div>
                <div class="col-lg-6">
                    <img src="images/page1-img1.png" alt="">
                </div>
            </div>
            
            <h1>Latest News</h1>
            <p>21 February, 2012</p>
            <p>24 Hour Emergency Towing

            </p>
            <p>Monday - Friday: 7:30 am - 6:00
            Saturday: 7:30 am - Noon</p>
            <p>Night Drop Available</p>
            <p>Demolink.org 8901 Marmora Road,
            Glasgow, D04 89GR.</p>
            
        
        </div>
    </div>

</div>

<?php 
    include('template/footer.php');
?>