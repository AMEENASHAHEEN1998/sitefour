<?php
    session_start();
    $noNavbar ='';
    $pageTitle = 'Register';
    if(isset($_SESSION['user'])){
        header('location:home.php');
    }
    include 'init.php'; // include init file
    

    //check if user come from http request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // upload variable   انبعت الي صورة فيها متغيرات على شكل مصفوفة 
        //$photo = $_FILES['photo'];

        $photoName = $_FILES['img_personal']['name'];
        $photoSize = $_FILES['img_personal']['size'];
        $photoTmp = $_FILES['img_personal']['tmp_name'];
        $photoType = $_FILES['img_personal']['type'];

        // list of upload file extention allow
        $photoAllowExtention = array("jpeg","jpg","png","gif");

        // get photo extention
        $tmp = explode(".",$photoName);
        $photoExtention = strtolower(end($tmp));
                
        $username = $_POST['username'];
        
        $password = $_POST['password'];
        $hashedPass = sha1($password);

        
        $formErrors = array();
        if(isset($_POST['username'])){

            
            $filterUser = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
            if(strlen($filterUser) < 4){
                $formErrors[] = 'User Name Can not Be Less Than 4 Charackter';
            }
        }
        if(! empty($photoName)&& ! in_array($photoExtention,$photoAllowExtention)){
            $formErrors[] = " Extention Photo Not <strong>Allowed</strong> ";
            
        }
        if( empty($photoName)){
            $formErrors[] = "  Photo Is <strong>Requered</strong> ";
            
        }
        if( $photoSize > 4194304){
            $formErrors[] = "  Photo Is Not Be Larger Than <strong>4MB</strong> ";
            
        }

        if(isset($_POST['password']) && isset($_POST['password-again'])){
            if(empty($_POST['password'])){
                $formErrors[] = 'Sorry Password Can Not Be Empty';
            }

            $pass = sha1($_POST['password']);
            $pass_again = sha1($_POST['password-again']);

            if($pass !== $pass_again){
                $formErrors[] = 'Sorry Password Not Match';
            }
        }
        

        if(empty($formErrors)){

            $photo = rand(0 , 1000000) . '_' . $photoName;
            move_uploaded_file($photoTmp,'uploads\photo\\' . $photo);

            $check = checkItem("name","news.users",$username);
            if($check == 1){
                $Msg = "<div class = 'alert alert-danger'>Sorry this user name is exist</div>";
                redirectPage($Msg,'back' , 5);
            }else{

                $stmt = $con->prepare("INSERT INTO sitefour.users(name ,password , img )
                        value (:zuser,:zpass,:zimg )");
                        $stmt->execute(array(
                            'zuser'     => $username,
                            'zpass'     => $password,
                            'zimg'    => $photoName
                        ));                         
                $count = $stmt->rowCount();
                        echo '<div class= "alert alert-success">'. $stmt->rowCount() . "Recored Insered".'</div>';
                        
        // if count > 0 this mean that connect to database correct
        if($count > 0){
            $_SESSION['user'] = $username; // register session name 
            $_SESSION['uid'] = $get['id'];// register userid in session
            header('location:home.php'); // transfer to dashpored page
            exit();
            }
                
            
            }
        }
        
    }
    
?>
<!-- register page html code -->
<h2 class='text-center '>SignUp</h2>
<form class='signup' action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" enctype = 'multipart/form-data' >
    <input class='form-control' type="text" name='username' autocomplete ='OFF' pattern = '.{4,}' title='User Name Must Be more than 4 chars' placeholder='Enter Your User Name' required>
    <input class='form-control' type="file" name='img_personal' autocomplete ='off' minlenght = '5'  required>
    <input class='form-control' type="password" name='password' autocomplete ='new-password' minlenght = '5' placeholder='Enter Complex Password' required>
    <input class='form-control' type="password" name='password-again' autocomplete ='new-password' placeholder='Enter Password Again' required>
    <input class='btn btn-success btn-block'  type="submit" name ='signup' value='SignUp'>

</form>

