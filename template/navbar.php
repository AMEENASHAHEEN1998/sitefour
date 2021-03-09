<?php
    if(isset($_SESSION['user'])){?>
        <nav  class="navbar navbar-inverse navbar-expand-sm bg-light navbar-light navTop" >

            <div class="navbar-header" >
                
                    <div class='navbar-nav hoverNav'>
                    <div class = "btn-group my-info dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                            <span class = "btn btn-default " >
                                <?php echo $_SESSION['user'];?>
                                <span class = "caret"></span>
                            </span>
                        
                        
                        <ul class="dropdown-menu">
                            <li><a href='logout.php'>Logout </a></li>
                            
                        </ul>
                        
                    </div>
                    </div>
                    
            </div>
        
            <?php


                
                }else{
            ?>
            <a href="login.php">
                <span class="pull-right">LogIn</span>
            </a> |
            <a href="register.php">
                <span class="pull-right">SignUp</span>
            </a>
            <?php } ?>
            
        </nav>
        

    <nav  class="navbar  navbar-expand-sm bg-light navbar-ligh " >
        <div class="container" >
          <div class="navbar-header navbar-left" >
            <a class="navbar-brand navbar-right " href="home.php"><img src="images/logo.png" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav">
          <span class="navbar-toggler-icon"></span>
        </button>
          </div>
      
          <div class="collapse navbar-collapse navbar-right" id="app-nav" >
            
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link " href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="events.php">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  " href="jobs.php">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  " href="contact.php">Contacts</a>
              </li>
              
            </ul>
            
            
            
          </div>

        
          
        </div>
      </nav>
      <hr>