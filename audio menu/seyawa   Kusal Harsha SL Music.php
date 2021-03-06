<?php 
function get_download_count($file=null){
	$counters = './counters/';
	if($file == null) return 0;
	$count = 0;
	if(file_exists($counters.md5($file).'_counter.txt')){
		$fp = fopen($counters.md5($file).'_counter.txt', "r");
		$count = fread($fp, 1024);
		fclose($fp);
	}else{
		$fp = fopen($counters.md5($file).'_counter.txt', "w+");
		fwrite($fp, $count);
		fclose($fp);
	}
	return $count;
}
?>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Seyawa| SLMusic - Free Download sinhala songs ,Rap & Hipop  Audios |Chathuraya Productions</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/fav.png"/>
		
          <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">


		<!--custom css start from here-->

		<!--start common css file-->
		<link rel="stylesheet" href="css/common.css">
		<!--end common css file-->
		<!--start download css-->
		<link rel="stylesheet" href="css/download.css">
		<!--end download css-->
<link rel="stylesheet" href="css/responsive-download.css">
<link rel="stylesheet" href="css/responsive-audio.css">


<!-- end page header--> 
	
    </head>

<body class="bg-color-sky-light">

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="index.html">
                                <img class="navbar-logo-img" src="img/logo.png" alt=" SlMusic Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="http://slmusic.ga/index.html">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- Audio -->
                                <li class="nav-item">
                                    <a class="nav-item-child active" href="http://slmusic.ga/audio.html">
                                        Audio
                                    </a>
                                </li>
                                <!-- End Audio -->

                                <!-- Video -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="http://slmusic.ga/video.html">
                                        Video
                                    </a>
                                </li>
                                <!-- End Video -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="http://slmusic.ga/contact.html">
                                        Contact
                                    </a>
                                </li>
                                <!-- End Contact -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>

<div class="page-content">
    
    <!--start artist song details-->
    <div class="container">
        <div class="row margin0 margin-top-1em">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0">
                <div class="song-details1 margin-btm-1em color-23 artist-des-1 pad-19">
                    <div class="row margin0">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                            <h1 ><span class="text-51">Seyawa</span><br><span class="text-52">Kusal Harsha</span></h1>
                        </div>

                    </div>
                    <div class="row margin0">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
                            <div class="song-profile margin-top-1em" title="">

                                									<img src="./img/seyawa.jpg" alt="" class="img-responsive">
									                            </div>
                        </div>
                    </div>
                    <div class="row margin0 pad-18">
                        <div class="col-sm-8 col-md-8 col-lg-8 padding0">
                                                        <p class="text-56">Published on 27 December 2017</p>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 padding0  hidden-xs">
                            <div class="row margin0 margin-top-0-5em">
                      
                            </div>
                        </div>
                    </div>
	
                    <div class="row margin0 padding-top-1em">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 padding0">
                            <div class="song-details margin-btm-1em">

                                                                    <a onclick="go_to_search(&#39;Thushara Joshap&#39;)">
                                        <div class="row margin0">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-52">Main</h6>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-53">Kusal Harsha</h6>
                                            </div>
                                        </div>
                                    </a>
                                                                        <a onclick="go_to_search(&#39;Tharindu costa&#39;)">
                                        <div class="row margin0">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-52">Music</h6>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-53">Chamath Silva</h6>
                                            </div>
                                        </div>
                                    </a>
                                                                        <a onclick="go_to_search(&#39;Uvindu Dayarathna&#39;)">
                                        <div class="row margin0">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-52">Lyrics</h6>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0">
                                                <h6 class="text-53">Danushka & Imesh</h6>
                                            </div>
                                        </div>
                                    </a>
                                                                    

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding0 pad-9">
                            <div class="row margin0">                         
                            </div>
                            <div class="row margin0">
                                <div class="col-xs-5 col-sm-12 col-md-12 col-lg-12 padding0">
                                    <h4 class="text-54">Downloads</h4>
                                </div>
                                <div class="col-xs-7 col-sm-12 col-md-12 col-lg-12 padding0" title="Total downloads ">
                                    <h4 class="text-55"> <?php echo get_download_count('seyawa.mp3'); ?> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
        <a href="./download.php?file=seyawa.mp3" class="btn btn-btn-3" data-toggle="tooltip" data-placement="above" data-original-title="">Download Mp3</a>
                        

                </div>
 
				   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
   
	<hr>
    <!--end artist song details-->

	
	

	


			
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a1804e735e279bc"></script> 


       <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
           <hr>

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="SLMusic Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="">SLMusic</a> Powered by: <a class="fweight-700" href="">Chathuraya Productions</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
		
		 <!-- Audio menu -->

	<script type="text/javascript" src="audio menu/js/templatemo_script.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.pagination li').click(changePage);
			$('.portfolio-item').magnificPopup({ 
				type: 'image',
				gallery:{
					enabled:true
				}
			});
		});
	</script>	
        
    </body>
    <!-- END BODY -->
</html>

