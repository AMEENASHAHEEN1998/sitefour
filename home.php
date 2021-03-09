<?php 
    include('init.php');
    session_start();

?>

    <div id="carouselExampleIndicators" class="container carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
        
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>

            
        </ol>
        <div class="carousel-inner">
        
            <div class="carousel-item active">
            <img src='images/slider-img1.jpg'alt='' class='d-block w-100'>
            

                
            </div>
            
        
        
            <div class="carousel-item ">
            
            <img src='images/slider-img2.jpg'alt='' class='d-block w-100'>
            

                
            </div>
            
        
        
            <div class="carousel-item ">
            
            <img src='images/slider-img3.jpg'alt='' class='d-block w-100'>

                
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
    <h1 style="margin-top: 30px;">Welcome!</h1>
    <div class="row " style="margin-top: 5px;">
        <div class="col-lg-8" >
            <p>Internet Cafe is one of free website templates created by TemplateMonster.com team. This web
                template is optimized for 1280X1024 screen resolution. It is also XHTML & CSS valid.
                This Internet Cafe Template goes with two packages – with PSD source files and without them. PSD
                source files are available for free for the registered members of TemplateMonster.com. The basic
                package (without PSD source) is available for anyone without registration.</p>
        </div>
        <div class="col-lg-2" >
            <h1>Tell your frind <a href="">about our caffe</a> </h1>
        </div>
        <div class="col-lg-2">
            <img src="images/page1-img1.png" alt="">
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-8">
            <h3>Here you can find all services in our place :</h3>

            <div class="row" >
                <ul class="col-lg-6">
                    <li>Broadband Internet PCs with modern LCD
                        Flat-screens, Printers, Scanners, Webcam</li>
                    <li>CD-RW/DVD-burner, Multi-card-reader, USBConnectors</li>
                    <li>Laptop/Notebook stations with LAN and/or
                        wireless access (10mbps speed)
                        </li>
                    <li>Rentable Laptop/Notebook cabins. (Daily
                            rent, locked and secured overnight)</li>
                    <li>Stabilized UPS with world-power outlets,
                                220V & 110V.</li>
                </ul>
            
            
                <ul class="col-lg-6">
                    <li>Outdoor wireless connection available 24/7
                        (100m radius)
                        </li>
                    <li>Digital Photo Printer - connect your SD-card,
                        SmartMedia, XD-picture Card, CompactFlash,
                        MemoryStick or mobile phone and print the
                        picture direct at our photo-lab-station (Printpix).
                        Of course you can also “unload” your camers
                        and burn CD...</li>
                    
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <h1>Latest News</h1>
            <p>21 February, 2012</p>
            <p>Duis autem vel eum iriure dolor in
                hendrerit tum zzril delenit augue duis
                dolore te feugait nulla facilisi. Lorem
                ipsum dolor sit amet, consectetuer in
                vulputate velit esse molestie consequat
                vel illum augue duis dolore
            </p>
            <a href="">Feugiat nulla facilisis at vero eros et
                accumsan et iusto...</a>
        </div>
    </div>


    </div>

<?php 
    include('template/footer.php');
?>