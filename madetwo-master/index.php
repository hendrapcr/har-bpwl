<?php 
	
	session_start();
	include 'proses/config.php';
    
	if(!isset($_SESSION['nama'])){
        $_SESSION['nama'] = '';
        
    }
    else {
        $nama = $_SESSION['nama'];
    }
        

 ?>
<!doctype html>

<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Keranja</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .main_dialogue h3 a:hover{
                text-decoration: underline;
                color: #7dbb26;
            }

            strong{
                color: #7dbb26;
                /*text-shadow: 1px 1px rgba(255,255,255,1);*/
            }

            .text-uppercase strong{
                /*text-shadow: 1px 1px rgba(255,255,255,1);*/

            }

            #team{
                background: #fff;
            }

            .text-white li{
                transition: .5s;
            }

            .text-white li:hover{
                color: #7dbb26;
                transform: scale(1.01);
            }


        </style>
    </head>

    <body data-spy="scroll" data-target="#navbar-menu" data-offset="110">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">
                <!-- Start Top Search -->
                
                <!-- End Top Search -->


                <div class="container"> 
                    

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="\fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/Keranjaa.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="komentar.php">Forum</a></li>
                            <li><a href="#">Store</a></li>

                            <?php if(!$_SESSION['nama']): ?>

                            <li><a href="proses/login.php">Sign Up</a></li>	

                            <?php elseif ($_SESSION['nama']) : ?>

							<li class="menu-dropdown">
                            <a href="proses/logout.php"><?php echo $nama ?> (Logout)</a>
                            </li>             


                            <?php endif; ?>

                            
                            
                            
                        </ul>
                           </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->
            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item xs-text-center">
                                        <div class="col-sm-4">
                                            <img src="assets/images/hello-phone.png" alt="" />
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="home_text xs-m-top-30">
                                                <h2 class="text-white">Welcome to <strong>Keranjaa</strong></h2>
                                                <h1 class="text-white">Belanja Asik Bareng Kami</h1>
                                                <h3 class="text-white"> Kami Membantu Anda Dalam Mencari<strong> Produk</strong> Terbaik</h3>
                                            </div>

                                            <div class="home_btns m-top-40">
                                                <a href="" class="btn btn-default m-top-20">Go !</a>
                                            </div>
                                        </div>
                                    </div><!-- End off slid item -->

                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-medical"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Best Quality Product</h3>
                                        <p>Produk yang di jual disini adalah produk dengan kualitas terbaik.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-tablet2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Responsive Design</h3>
                                        <p>Anda bisa belanja menggunakan platform apa saja, baik pada PC/Laptop ataupun pada Smartphone anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-70">
                                    <div class="f_item_icon">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Easy to Buy</h3>
                                        <p>Kini anda belanja tidak perlu ribet. Cukup dengan sekali tekan, dan konfirmasi pembayaran pada akun anda, Barang langsung di proses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features_item m-top-70">
                                    <div class="f_item_icon">
                                        <i class="icon icon-clock2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Process Item Fastly</h3>
                                        <p>Barang yang anda pesan akan di proses dengan cepat oleh admin kami.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->


            <!--Dialogue section-->

            <section id="dialogue" class="dialogue bg-white roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_dialogue text-center">
                            <div class="col-md-12">
                                <h3>Belanja tidak perlu ribet<br />
                                    Cukup duduk santai di rumah dan tinggal <a href=""><span><strong>KLIK</strong></span></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--Business Section-->
            <section id="business" class="business bg-blue roomy-70">
                <div class="business_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-5">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase text-white"><strong>Beli</strong> Barang keperluanmu di sini</h2>

                                    <p class="m-top-20 text-white">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
                                    </p>

                                    <ul class="text-white">
                                        <li><i class="fa fa-arrow-circle-right"></i> Easy to Buy</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Best Quality</li>
                                    </ul>

                                    <div class="business_btn m-top-50">
                                        <a href="" class="btn btn-default m-top-20">Go to Store !</a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="business_item">
                                    <div class="business_img">
                                        <img src="assets/images/business-img.png" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->


            <!--product section-->
            


            <!--product section-->
            <section id="team" class="team bg-grey fix">
                <div class="container">
                    <div class="main_team roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Team</h2>
                            <h5>We have a talent with amazing skill</h5>
                        </div>

                        <div id="team-slid" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#team-slid" data-slide-to="0" class="active"></li>
                                <li data-target="#team-slid" data-slide-to="1"></li>
                                <li data-target="#team-slid" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team_item team_skill">
                                                    <div class="team_author">
                                                        <h4>John Doe</h4>
                                                        <p>CEO & FOunder</p>
                                                    </div>

                                                    <div class="team_skill_title fix m-top-40 m-bottom-40">
                                                        <h5>Best Skill</h5>
                                                    </div>

                                                    <div class="skill_bar sm-m-top-50 m-top-20"> 
                                                        <div class="teamskillbar clearfix m-top-20" data-percent="80%">
                                                            <h6 class="text-uppercase">Photoshop</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                            <h6 class="text-uppercase">WEB DESIGN</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="90%">
                                                            <h6 class="text-uppercase">LOGO Design</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                            <h6 class="text-uppercase">Wordpress</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->
                                                    </div><!-- End off skill bar -->

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team-img1.png" alt="" />
                                                    </div>
                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item team_content xs-m-top-30">
                                                    <h4>Failure will never overtake me if my
                                                        determination to succeed is strong enough.</h4>
                                                    <h5 class="m-top-40">- Og Mandino</h5>

                                                    <div class="divider"></div>

                                                    <div class="team_socail">
                                                        <h5>Get In Touch</h5>
                                                        <ul class="list-inline m-top-20">
                                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                                                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                        </div><!-- End off row -->
                                    </div>
                                </div><!-- End off team -->

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team_item team_skill">
                                                    <div class="team_author">
                                                        <h4>John Doe</h4>
                                                        <p>CEO & FOunder</p>
                                                    </div>

                                                    <div class="team_skill_title fix m-top-40 m-bottom-40">
                                                        <h5>Best Skill</h5>
                                                    </div>

                                                    <div class="skill_bar sm-m-top-50 m-top-20"> 
                                                        <div class="teamskillbar clearfix m-top-20" data-percent="80%">
                                                            <h6 class="text-uppercase">Photoshop</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                            <h6 class="text-uppercase">WEB DESIGN</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="90%">
                                                            <h6 class="text-uppercase">LOGO Design</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                            <h6 class="text-uppercase">Wordpress</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->
                                                    </div><!-- End off skill bar -->

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team-img1.png" alt="" />
                                                    </div>
                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item team_content xs-m-top-30">
                                                    <h4>Failure will never overtake me if my
                                                        determination to succeed is strong enough.</h4>
                                                    <h5 class="m-top-40">- Og Mandino</h5>

                                                    <div class="divider"></div>

                                                    <div class="team_socail">
                                                        <h5>Get In Touch</h5>
                                                        <ul class="list-inline m-top-20">
                                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                                                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                        </div><!-- End off row -->
                                    </div>
                                </div><!-- End off team -->

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team_item team_skill">
                                                    <div class="team_author">
                                                        <h4>Reyhan Jovie Dwiputra</h4>
                                                        <p>CEO & FOunder</p>
                                                    </div>

                                                    <div class="team_skill_title fix m-top-40 m-bottom-40">
                                                        <h5>Best Skill</h5>
                                                    </div>

                                                    <div class="skill_bar sm-m-top-50 m-top-20"> 
                                                        <div class="teamskillbar clearfix m-top-20" data-percent="90%">
                                                            <h6 class="text-uppercase">WEB DEVELOPPER</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="85%">
                                                            <h6 class="text-uppercase">WEB DESIGN</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="90%">
                                                            <h6 class="text-uppercase">LOGO Design</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->

                                                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                            <h6 class="text-uppercase">Wordpress</h6>
                                                            <div class="teamskillbar-bar"></div>
                                                        </div> <!-- End Skill Bar -->
                                                    </div><!-- End off skill bar -->

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team-img1.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                            <div class="col-sm-4">
                                                <div class="team_item team_content xs-m-top-30">
                                                    <h4>Failure will never overtake me if my
                                                        determination to succeed is strong enough.</h4>
                                                    <h5 class="m-top-40">- Og Mandino</h5>

                                                    <div class="divider"></div>

                                                    <div class="team_socail">
                                                        <h5>Get In Touch</h5>
                                                        <ul class="list-inline m-top-20">
                                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                                                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><!-- End off col-sm-4 -->

                                        </div><!-- End off row -->
                                    </div>
                                </div><!-- End off team -->

                            </div>

                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->


            <!--Brand Section-->
            <!-- End off Brand section -->



            <!--Test section-->
            <section id="test" class="test bg-black roomy-60 fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix text-center">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase text-white">Testimoni</h2>
                                    <h5 class="text-white">The Clients already give the good feedback</h5>
                                </div>
                            </div>

                            <div id="testslid" class="carousel slide carousel-fade" data-ride="carousel">

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/test-img1.jpg" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <em>Mauris posuere lectus nibh mauris interdum fermentum nunc, in fringilla mauris
                                                        imperdiet non estibulum blandit, nisl non volutpat luctus, nisi leo posuere
                                                        tortor quis ultrices turpis nisl eu ante.</em>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                    <div class="item">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/test-img1.jpg" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <em>Mauris posuere lectus nibh mauris interdum fermentum nunc, in fringilla mauris
                                                        imperdiet non estibulum blandit, nisl non volutpat luctus, nisi leo posuere
                                                        tortor quis ultrices turpis nisl eu ante.</em>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                    <div class="item">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/test-img1.jpg" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <em>Mauris posuere lectus nibh mauris interdum fermentum nunc, in fringilla mauris
                                                        imperdiet non estibulum blandit, nisl non volutpat luctus, nisi leo posuere
                                                        tortor quis ultrices turpis nisl eu ante.</em>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                </div><!-- End off carosel inner -->

                                <!-- Controls -->
                                <a class="left carousel-control" href="#testslid" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a class="right carousel-control" href="#testslid" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>

                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off test section -->



            <!--Call to  action section-->


            <footer id="contact" class="footer bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet consec tetur adipiscing elit 
                                        nulla aliquet pretium nisi in cursus 
                                        maecenas nec eleifen.</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                123 suscipit ipsum nam auctor
                                                mauris dui, ac sollicitudin mauris,
                                                Bandung</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+1 2345 6789</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>youremail@mail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-1.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-2.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-3.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <ul class="m-top-10">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Themes</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter you Email">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a href="" class="text-uppercase">Your Logo</a>
                                        <p>Lorem ipsum dolor sit amet consec tetur 
                                            adipiscing elit nulla aliquet pretium nisi in</p>
                                    </div>
                                    <ul class="list-inline m-top-30">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with 
                            <i class="fa fa-heart"></i>
                            by 
                            <a target="_blank" href="http://execute.id">Execute.id</a> 
                            2018. All Rights Reserved
                        </p>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
