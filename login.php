<?php  
    ob_start(); // output buffering start
    session_start();
    $noNavbar ='';
    $pageTitle = 'LogIn';
    if(isset($_SESSION['user'])){
        header('location:home.php');
    }
    include 'init.php'; // include init file


    //check if user come from http request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            $username = $_POST['UserName'];
            $pass = $_POST['Password'];
            $hashedPass = sha1($pass);
            
            

            // check if user exist in database
            $stmt = $con->prepare("SELECT id , name ,password FROM sitefour.users WHERE name = ? AND password = ? ");
            $stmt->execute(array($username,$pass)); 
            $get = $stmt->fetch(); 
            $count = $stmt->rowCount();
            
            // if count > 0 this mean that connect to database correct
            if($count > 0){
                $_SESSION['user'] = $username; // register session name 
                $_SESSION['uid'] = $get['id'];// register userid in session
                header('location:index.php'); // transfer to dashpored page
                exit();
            }
        
            
        }
    
    
?> 
<div class='container '>
    <h2 class='text-center '>
        LogIn
    </h2>
    <!-- Start login form -->
    <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST">
        <div >
            <input class='form-control' type="text" name='UserName' autocomplete ='off' placeholder='Enter Your User Name' required='required'>
        </div>
        <div >
            <input class='form-control' type="password" name='Password' autocomplete ='new-password' placeholder='Enter Your Password'required='required'>
        </div>
        <input class='btn btn-primary btn-block' type="submit" name='login' value='LogIn'>
        
    </form>


    <div class = 'text-center'>
        <?php 
            if(!empty($formErrors)){
                foreach($formErrors as $error){
                    echo $error . '</br>';
                }
            }
        ?>
    </div>
</div>




