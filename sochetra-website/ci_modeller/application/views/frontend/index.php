<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>SOCHETRA NOV</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

        <!-- CSS | font-awesome -->
        <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.min.css" />

        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css" />

        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/colors/darkBlue.css" />

         <!-- CSS | Style Timeline -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timeline-style.css">

        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css" />
        <!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>assets/css/customize-main.css"> -->

        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css"/> 

        <!-- CSS | Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <!-- Favicon 
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">-->

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/icons/font-awesome-ie7.min.css"/>
        <![endif]-->

        <style>
            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                }
            }
            @media only screen and (min-width : 800px) and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                    width:89%;
                }
            }			

        </style>

    </head>

    <body>

        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div>

        <!-- .slideshow -->
        <ul class="cb-slideshow" id="cb_slideshow">
            <li><span></span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul> 
        <!-- /.slideshow --> 

        <!-- .wrapper --> 
        <div class="wrapper">

            <!--- .Content --> 
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">   


                                <div class="col-md-3 widget-profil">
                                    <div class="row">

                                        <!-- Profile Image -->
                                        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">

                                            <div class="image-holder one" id="pic_prof_1"  style="display:block">

                                                <img class="head-image up circle" src="<?php echo base_url(); ?>assets/images/profile/Professional photo1.jpg" width="150" height="176" alt="" />
                                             <!--    <img class="head-image up-left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down-left circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image down-right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image up-right circle" src="http://placehold.it/150x150" width="150" height="150" alt="" />
                                                <img class="head-image front circle" src="http://placehold.it/150x150" width="150" height="150" alt="" /> -->

                                            </div>

                                            <!-- style for simple image profile -->		
                                            <!-- <div class="circle-img" id="pic_prof_2"></div> -->

                                        </div>
                                        <!-- End Profile Image -->

                                        <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">

                                            <!-- Profile info -->
                                            <div id="profile_info">
                                                <h1 id="name" class="transition-02">SOCHETRA NOV</h1>
                                                <h4 class="line">WEB PROGRAMMER</h4>
                                                <h6><span class="fa fa-map-marker"></span> PHNOM PENH , CAMBODIA</h6>
                                            </div>
                                            <!-- End Profile info -->  


                                            <!-- Profile Description -->
                                            <div id="profile_desc">
                                                <p>
                                                    I was a student study at <b>Passerelles numeriques Cambodia (PNC)</b>. 
                                                </p>
                                                <p>
                                                    I am 2017 generation of PNC student.
                                                </p>
                                            </div>
                                            <!-- End Profile Description -->  


                                            <!-- Name -->
                                            <div id="profile_social">
                                                <h6>My Social Profiles</h6>
                                                <a href="#" id='facebook'><i class="fa fa-facebook"></i></a>
                                                <a href="#" id='twitter'><i class="fa fa-twitter"></i></a>
                                                <a href="#" id='linkin'><i class="fa fa-linkedin"></i></a>
                                                <a href="#" id='google-plus'><i class="fa fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-skype"></i></a>
                                                <div class="clear"></div>
                                            </div>
                                            <!-- End Name -->  

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">			
                                                <span class="tite-list">profile</span>
                                                <a href="#"><i class="fa fa-user icon_menu icon_menu_active"></i></a>
                                                
                                            </li>

                                            <li class="tabs-resume hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="resume"> 
                                                <span class="tite-list">resume</span>
                                                <i class="fa fa-star-o icon_menu"></i>
                                            </li>

                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio"> 
                                                <span class="tite-list">portfolio</span>
                                                <i class="fa fa-trophy icon_menu"></i>
                                            </li>

                                            <li class="tabs-blog hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog">
                                                <span class="tite-list">blog</span>
                                                <i class="fa fa-users icon_menu"></i>
                                            </li>

                                            <!-- <li class="tabs-blog hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog">
                                                <span class="tite-list">Education</span>
                                                <i class="fa fa-graduation-cap icon_menu" aria-hidden="false"></i>
                                            </li> -->

                                            <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" style="margin-bottom: 48px !important;"> 
                                                <span class="tite-list">contact</span>
                                                <i class="fa fa-envelope icon_menu"></i> 
                                            </li>

                                            <a href="#" id="print"><i class="fa fa-print icon_print"></i> </a>
                                            <a href="#" id="downlowd"><i class="fa fa-download icon_print"></i> </a>

                                        </ul>
                                        <!-- /resp-tabs-list -->

                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">

                                            <!-- profile -->
                                            <div id="profile" class="content_2">
                                                <!-- .title -->
                                                <h1 class="h-bloc">MY PROFILE</h1>

                                                <div class="row top-p">
                                                    <div class="col-md-6 profile-l">

                                                        <!--About me-->
                                                        <div class="title_content">
                                                            <div class="text_content">SOCHETRA NOV</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                        <ul class="about">

                                                            <li>
                                                                <i class="glyphicon glyphicon-user"></i>
                                                                <label>Name</label>
                                                                <span class="value">Sochetra NOV</span>
                                                                <div class="clear"></div>
                                                            </li>

                                                            <li>
                                                                <i class="glyphicon glyphicon-calendar"></i>
                                                                <label>Date of birth</label>
                                                                <span class="value">October 18, 1997</span>
                                                                <div class="clear"></div>
                                                            </li>

                                                            <li> 
                                                                <i class="glyphicon glyphicon-map-marker"></i>
                                                                <label>Adress</label>
                                                                <span class="value">Phnom Penh, Cambodia</span>
                                                                <div class="clear"></div>
                                                            </li>

                                                            <li>
                                                                <i class="glyphicon glyphicon-envelope"></i>
                                                                <label>Email</label>
                                                                <span class="value">sochetra12.nov@gmail.com</span>
                                                                <div class="clear"></div>
                                                            </li>

                                                            <li>
                                                                <i class="glyphicon glyphicon-phone"></i>
                                                                <label>Phone</label>
                                                                <span class="value">098 421 692</span>
                                                                <div class="clear"></div>
                                                            </li>

                                                            <li>
                                                                <i class="glyphicon glyphicon-globe"></i>
                                                                <label>Website</label>
                                                                <span class="value"><a href="#" target="_blank">www.sochetra-nov-ezyro.com</a></span>
                                                                <div class="clear"></div>
                                                            </li>

                                                        </ul>


                                                        <p style="margin-bottom:20px">
                                                            <!-- <i class="fa fa-quote-left"></i>        -->
                                                            I was a student study at Passerelles numeriques Cambodia (PNC). I was study WEB programming. My skill is JavaScript, Jquery, HTML, CSS, Bootstrap, PHP, Codeigniter, Java, Wordpress. 
                                                        </p>

                                                        <p style="margin-bottom:20px;">
                                                            <i class="fa fa-quote-left"></i>       
                                                            The winner never give up, 
                                                            <i class="fa fa-quote-right"></i> 
                                                        </p>

                                                    </div>
                                                    <!-- End left-wrap -->

                                                    <div class="col-md-6 profile-r">

                                                        <div class="cycle-slideshow">
                                                            <img src="<?php echo base_url(); ?>assets/images/profile/me.jpg" alt="my_self" />
                                                            <!-- <img src="images/profile/me1.jpg" alt="" />
                                                            <img src="images/profile/test.jpg" alt="my_self" /> -->
                                                            <!-- <img src="images/profile/me2.jpg" alt="" /> -->
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="clear"></div>


                                                <div class="row" id="services">
                                                    <div class="col-md-12">
                                                        <div class="title_content">
                                                            <div class="text_content">My Services</div>
                                                            <div class="clear"></div>
                                                        </div>


                                                        <div class="col-md-4 pack-service">
                                                            <div class="service">
                                                                <div class="service-icon"><i class="fa fa-rocket"></i></div>
                                                                <div class="service-detail">
                                                                    <h6>Best Performance App</h6>
                                                                    <p>
                                                                        I will provide the best App on Android and ios with the best performance and amazing Interface
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 pack-service">
                                                            <div class="service">
                                                                <div class="service-icon"><i class="fa fa-wrench"></i></div>
                                                                <div class="service-detail">
                                                                    <h6> Maintance </h6>
                                                                    <p>
                                                                        I am very happy to help the customer with the problem of software or system with no charge if the warranty under 6 month.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 pack-service">
                                                            <div class="service">
                                                                <div class="service-icon"><i class="fa fa-globe"></i></div>
                                                                <div class="service-detail">
                                                                    <h6> Help Social </h6>
                                                                    <p>
                                                                        I would like to help social also. If the public school want me to build a system for their school, I am glad to help them with the lowest fee. 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div><!-- End Services -->


                                                <div class="clear"></div>
                                                 <div class="border-list"></div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="bottom-p">
                                                            <div class="title_content">
                                                                <div class="text_content">My Mission</div>
                                                                <div class="clear"></div>
                                                            </div>

                                                            <div class="panel-group" id="accordion">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapse_tabs">
                                                                                Improve Technology of Public School In Cambodia 
                                                                                <i class="glyphicon glyphicon-chevron-up" style="float: right;font-size: 13px;"></i>
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                                        <div class="panel-body">
                                                                            <!-- <i class="fa fa-quote-left"></i> -->
                                                                            I would like to help every public school in cambodia use the technology to controll the student and stuff by using the software or application such as student management system, Attendance system, ect.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapse_tabs">
                                                                                Provide Website To Each Public School In Cambodia
                                                                                <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseTwo" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <i class="fa fa-quote-left"></i>  
                                                                            Every public school should have their own website to keep their souvenir to show to the next generation. Furthermore, It can show to other people about activity, teaching, in the school also.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapse_tabs">
                                                                                Moving Let Us Help
                                                                                <i class="glyphicon glyphicon-chevron-down" style="float: right;font-size: 13px;"></i>
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <i class="fa fa-quote-left"></i>  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="clear"></div>

                                            </div>
                                            <!-- End .profile -->
<!-- This is the page skill -->
                                            <!-- .resume -->
                                            <div id="resume" class="content_2">
                                                <!-- .title -->
                                                <h1 class="h-bloc">MY SKILL</h1> 

                                                <div class="row">

                                                    <!-- .resume-right -->
                                                    <div class="col-md-6">

                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Programming Skills</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>HTML5</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">90%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 
                                                            
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>CSS</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">80%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 
                                                            
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="85%">
                                                                <div class="skillbar-title"><span>Wordpress</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">85%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="80%">
                                                                <div class="skillbar-title"><span>Bootstrap</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">80%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>JavaScript</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">90%</div>
                                                            </div>
                                                            <!-- /.skillbar -->
                                                            
                                                               <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="85%">
                                                                <div class="skillbar-title"><span>Jquery</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">85%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>Php</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">90%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 
                            
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>Codigniter</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">90%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="20%">
                                                                <div class="skillbar-title"><span>Java</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">30%</div>
                                                            </div>
                                                            <!-- /.skillbar --> 
                                                        </div>

                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Language Skills</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="90%">
                                                                <div class="skillbar-title"><span>English</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">80%</div>
                                                            </div>
                                                        </div>


                                                        <!-- .title_content -->
                                                       <!--  <div class="title_content" style="float: none;">
                                                            <div class="text_content">My Resume</div>
                                                            <div class="clear"></div>
                                                        </div> -->
                                                        <!-- /.title_content -->

                                                        <!-- .download_resume -->
                                                        <!-- <a class="download" style="margin:0;float: left;" href="#">
                                                            <span data-hover="Download My Resume"><i class="glyphicon glyphicon-download-alt"></i> Download My Resume</span>
                                                        </a> -->
                                                        <!-- /.download_resume -->

                                                    </div>
                                                    <!-- /.resume-right -->
                                                    
                                                    <!-- resume-left -->
                                                    <div class="col-md-6 resume-left">    
                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Designs skills</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="50%">
                                                                <div class="skillbar-title"><span>Photoshop</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">50%</div>
                                                            </div>
                                                            <!-- /.skillbar -->
                                                        </div>

                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Office Skills</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">       
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="85%">
                                                                <div class="skillbar-title"><span>MS Excel</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">65%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix " data-percent="95%">
                                                                <div class="skillbar-title"><span>MS Word</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">75%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix " data-percent="60%">
                                                                <div class="skillbar-title"><span>Powerpoint</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">70%</div>
                                                            </div>
                                                        </div>
                                                        <!-- /.skillbar -->

                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Hobbies Skills</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">
                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix" data-percent="60%">
                                                                <div class="skillbar-title"><span>Music (guitar)</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">30%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix " data-percent="95%">
                                                                <div class="skillbar-title"><span>Sport (Football)</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">95%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix " data-percent="85%">
                                                                <div class="skillbar-title"><span>Reading</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">75%</div>
                                                            </div>
                                                            <!-- /.skillbar -->

                                                            <!-- .skillbar -->
                                                            <div class="skillbar clearfix " data-percent="95%">
                                                                <div class="skillbar-title"><span>Gaming</span></div>
                                                                <div class="skillbar-bar"></div>
                                                                <div class="skill-bar-percent">85%</div>
                                                            </div>
                                                            <!-- /.skillbar -->
                                                        </div>
                                                    </div>
                                                    <!-- /.resume-left -->
<!-- =============================start default result left ============================================================-->
                                                    <!-- .resume-left -->
                                                    <!-- <div class="col-md-6 resume-left">     -->
                                                        <!-- .title_content -->
                                                       <!--  <div class="title_content" style="margin-bottom:5px">
                                                            <div class="text_content">Experience</div>
                                                            <div class="clear"></div>
                                                        </div> -->
                                                        <!-- /.title_content -->

                                                        <!-- .attributes -->
                                                      <!--   <ul class="attributes">
                                                            <li class="first">
                                                                <h5>Web Developer <span class="duration"><i class="fa fa-calendar color"></i> 2011 - 2013</span></h5>
                                                                <h6><span class="fa fa-briefcase"></span> Name of Company</h6>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                                                            </li>
                                                            <li>
                                                                <h5>Front-End Developer <span class="duration"><i class="fa fa-calendar color"></i> 2010 - 2011</span></h5>
                                                                <h6><span class="fa fa-briefcase"></span> Name of Company</h6>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                                                            </li>

                                                        </ul> -->
                                                        <!-- /.attributes -->
                                                        <!-- <br> -->

                                                        <!-- .title_content -->
                                                        <!-- <div class="title_content">
                                                            <div class="text_content">Education</div>
                                                            <div class="clear"></div>
                                                        </div> -->
                                                        <!-- /.title_content -->

                                                        <!-- .attributes -->
                                                     <!--    <ul class="attributes">
                                                            <li class="first">
                                                                <h5>Master of Engineering <span class="duration"><i class="fa fa-calendar color"></i> 2011 - 2013</span></h5>
                                                                <h6><span class="fa fa-book"></span> Name of University</h6>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                                                            </li>
                                                            <li>
                                                                <h5>Bachelor of Engineering <span class="duration"><i class="fa fa-calendar color"></i> 2010 - 2011</span></h5>
                                                                <h6><span class="fa fa-book"></span> Name of University</h6>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                                                            </li>
                                                        </ul> -->
                                                        <!-- /.attributes -->
                                                        <!-- <br>   -->


                                                        <!-- .title_content -->
                                                       <!--  <div class="title_content">
                                                            <div class="text_content">Awards</div>
                                                            <div class="clear"></div>
                                                        </div> -->
                                                        <!-- /.title_content -->

                                                        <!-- .attributes -->
                                                        <!-- <ul class="attributes">
                                                            <li class="first">
                                                                <h5>Graphic &amp; Art Direction <span class="duration"><i class="fa fa-calendar color"></i> 2013 - 2014</span></h5>
                                                                <h6><span class="fa fa-trophy"></span> Name of Institute</h6>
                                                                <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                                                            </li>
                                                            <li>
                                                                <h5>Design &amp; Art Direction <span class="duration"><i class="fa fa-calendar color"></i> 2012 - 2013</span></h5>
                                                                <h6><span class="fa fa-trophy"></span> Name of Institute</h6>
                                                                <p>Emi Phasellus congue auctor risuspon, eget males. Pellentes que un imperdiet, odio quis orn sollicitud. Sed vitae lectus elementum mauris.</p>
                                                            </li>

                                                        </ul> -->
                                                        <!-- /.attributes -->
                                                        <!-- <br>   -->

                                                    <!-- </div> -->
<!-- =============================End default result left ============================================================-->
                                                    <!-- /.resume-left -->
                                                </div>

                                                <div style="clear: both"></div>  

<!-- /////////////////////////////////start block clicent reference///////////////////////////////////////////// -->
                                                <!-- client reference -->
                                               <!--  <div class="row">
                                                    <div class="col-md-12">   

                                                        <div class="reference clearfix"> 
 -->
                                                            <!-- .title_content -->
                                                            <!-- <div class="title_content" style="margin-bottom:5px">
                                                                <div class="text_content">Client reference</div>
                                                                <div class="clear"></div>
                                                            </div> -->
                                                            <!-- /.title_content -->


 <!--                                                            <ul>
                                                                <li class="clearfix">
                                                                    <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                                                                    <p>“Many desktop publishing packages and web page editors now use Lorem Ipsum as their default will model text, and a search for 'lorem ipsum' hope is uncover many web sites still”</p>
                                                                    <span>John Doe, UX Designer</span>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                                                                    <p>“very nice colleague she always helped me out if i didnt know something editors now use Lorem Ipsum as their default”</p>
                                                                    <span>Leia Calvi, UX Designer</span>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <img src="http://placehold.it/100x100" class="img_reference" width="100" height="100" alt="">
                                                                    <p>“old colleague and now close friend, she is really sweet and helpfull packages and web page editors now use Lorem Ipsum as their default will model text”</p>
                                                                    <span>Maria Callas, UX Designer</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>




                                                    <div style="clear: both"></div>   
                                                </div> -->

<!-- /////////////////////////////////END block clicent reference///////////////////////////////////////////// -->

                                            </div>
                                            <!-- End .resume -->
<!-- This is the page Achievement -->
                                            <!-- .portfolio -->
                                            <div id="portfolio" class="content_2">
                                                <!-- .title -->
                                                <h1 class="h-bloc">MY ACHIEVEMENT</h1>

                                                <!-- .container-portfolio -->
                                                <div class="container-portfolio">

                                                    <!-- #filters -->
                                                    <ul id="filters" class="clearfix">
                                                        <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">All</span></li>
                                                        <li><span class="filter" data-filter="catWeb">Website</span></li>
                                                        <li><span class="filter" data-filter="catGraphic">Game</span></li>
                                                        <li><span class="filter" data-filter="catMotion">Application</span></li>
                                                        <li><span class="filter" data-filter="logo">System</span></li>
                                                    </ul>
                                                    <!-- /#filters -->

                                                    <!-- #portfoliolist -->
                                                    <div id="portfoliolist">

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio logo" data-cat="logo">	
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">		
                                                                <a href="http://placehold.it/600x849" rel="portfolio" title="Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet">
                                                                    <img src="http://placehold.it/600x849" alt="Visual Infography" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>		-->
                                                        <!-- /.portfolio -->



                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">	
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">		
                                                                <a href="<?php echo base_url(); ?>assets/images/website/personalSite.png" title=" After completed the bootstrap self learning, I built the static website about my self" rel="portfolio">

                                                                    <img src="<?php echo base_url(); ?>assets/images/website/personalSite.png" alt="Visual Infography" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Personal Website</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>		
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">			
                                                                <!--<a href="<?php echo base_url(); ?>assets/images/wordpressWebsite.png" title="It is the wordpress Project that spend a week to completed this website." rel="portfolio">-->
                                                                    <img src="<?php echo base_url(); ?>assets/images/website/wordpressWebsite.png" alt="Sonor's Design" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Ti Krong Sabay</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>				
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">			
                                                                <a href="<?php echo base_url(); ?>assets/images/website/KITS.png" title="This is the WEB Project II." rel="portfolio">
                                                                    <img src="<?php echo base_url(); ?>assets/images/website/KITS.png" alt="Typography Company" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Khmer IT Solution Service</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">
                                                                <a href="<?php echo base_url(); ?>assets/images/website/KITS.png" title="This is the WEB Project II." rel="portfolio">
                                                                    <img src="<?php echo base_url(); ?>assets/images/website/KITS.png" alt="Weatherette" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Khmer IT Solution Service</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">		
                                                                <a href="http://placehold.it/600x849" rel="portfolio">				
                                                                    <img src="http://placehold.it/600x849" alt="BMF" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Motion Graphic</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio logo" data-cat="logo">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">		
                                                                <a href="http://placehold.it/600x849" rel="portfolio" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien.">
                                                                    <img src="http://placehold.it/600x849" alt="KittyPic" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">			
                                                                <a href="http://placehold.it/600x849" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Graph Plotting" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Web Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catGraphic" data-cat="catGraphic">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">	
                                                                <a href="<?php echo base_url();?>assets/images/GAME/ballGame.png" title="I built this game just testing bout my knowledge about JavaScript." rel="portfolio">
                                                                    <img src="<?php echo base_url();?>assets/images/GAME/ballGame.png" alt="QR Quick Response" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Ball Game</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->
                                                        
                                                        <!-- .portfolio -->
                                                        <div class="portfolio catGraphic" data-cat="catGraphic">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">	
                                                                <a href="<?php echo base_url();?>assets/images/GAME/fishGame.png" title="This game was built for a project at my school to finish the course JQuery." rel="portfolio">
                                                                    <img src="<?php echo base_url();?>assets/images/GAME/fishGame.png" alt="QR Quick Response" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Fish Game</a>
                                                                            <span class="text-category"></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio logo" data-cat="logo">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">	
                                                                <a href="http://placehold.it/600x849" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Mobi Sock" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
<!--                                                        <div class="portfolio logo" data-cat="logo">
                                                             .portfolio-wrapper 
                                                            <div class="portfolio-wrapper">
                                                                <a href="http://placehold.it/600x849" rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Village Community Church" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Logo</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                             /.portfolio-wrapper 
                                                        </div>	-->
                                                        <!-- /.portfolio -->

                                                        <div class="clear"></div>

                                                    </div>
                                                    <!-- #portfoliolist -->
                                                </div>
                                                <!-- /.container-portfolio -->
                                            </div>
                                            <!-- End .portfolio -->
<!-- start workshop -->
                                             <!-- .workshop -->
                                            <div id="resume" class="content_2">
                                                <!-- .title -->
                                                <h1 class="h-bloc">WORKSHOP</h1> 

                                                <div class="row">

                                                    <!-- .resume-right -->
                                                    <div class="col-md-12">

                                                        <!-- .title_content -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">My Timeline</div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- /.title_content -->

                                                        <div class="skills">
                                                            <ul class="timeline">
                                                                <li>
                                                                  <div class="timeline-badge"><i class="fa fa-bicycle"></i> <p>RP Visit</p></div>
                                                                  <div class="timeline-panel">
                                                                    <div class="timeline-heading">
                                                                      <h4 class="timeline-title">Royale Palace Visit</h4>
                                                                      <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                                    </div>
                                                                    <div class="timeline-body">
                                                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                                                    </div>
                                                                  </div>
                                                                </li>

                                                                <li class="timeline-inverted">
                                                                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                                                    <div class="timeline-panel">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /.workshop-right -->
                                                </div>
                                                <div style="clear: both"></div>
                                            </div>
<!-- End of page workshop -->

<!-- This is the page Contact -->
                                            <!-- .contact -->
                                            <div id="contact" class="content_2">

                                                <h1 class="h-bloc">Contact - Contact Me</h1>


                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div id="map" style='width:100%;height:100%;'>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15636.063574930504!2d104.8863393!3d11.5507174!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1490009835490" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>  

                                                    <div class="col-lg-12">
                                                        <div class="row" id="contact-user">
                                                            <div class="col-md-5">
                                                                <div class="contact-info">
                                                                    <!--<h3 class="main-heading"><span>Contact info</span></h3>-->

                                                                    <div class="title_content" style="float: none;">
                                                                        <div class="text_content">Contact info</div>
                                                                        <div class="clear"></div>
                                                                    </div>

                                                                    <ul>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> Adress:</span> Phnom Penh, Cambodia<br /></li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> Email:</span> sochetra12.nov@gmail.com</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> Phone:</span> 098 421 692 </li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:</span> www.sochetra-nov-ezyro.com</li>
<!--                                                                        <li><span class="span-info"><i class="fa fa-skype"></i> Skype:</span> sochetra.NOV</li>
                                                                        <li><span class="span-info"><i class="fa fa-facebook"></i> Facebook:</span> messi KH</li>
                                                                        <li><span class="span-info"><i class="fa fa-twitter"></i> Twitter:</span> sochetra  NOV</li>
                                                                        <li><span class="span-info"><i class="fa fa-linkedin"></i> LinkedIn:</span> sochetra  NOV</li>
                                                                    </ul>-->
                                                                </div>
                                                                <!-- /Contact Info -->
                                                                <div class="clear"></div>

                                                                <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->

                                                                <div class="title_content tiltle_contacts" style="float: none;">
                                                                    <div class="text_content">Follow me</div>
                                                                    <div class="clear"></div>
                                                                </div>



                                                                <div id="profile_social">
                                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                    <a href="#"><i class="fa fa fa-skype"></i></a>
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    <div class="clear"></div>
                                                                </div>



                                                            </div>

                                                            <div class="col-md-7">
                                                                <!-- Contact Form -->
                                                                <div class="title_content" style="float: none;">
                                                                    <div class="text_content">Let's keep in touch</div>
                                                                    <div class="clear"></div>
                                                                </div>

                                                                <div class="contact-form">
                                                                    <!--<h3 class="main-heading"><span>Let's keep in touch</span></h3>-->



                                                                    <div id="contact-status"></div>

                                                                    <form action="" id="contactform">
                                                                        <p class="form-group" id="contact-name">
                                                                            <label for="name">Your Name</label>
                                                                            <input type="text" name="name" class="form-control name-contact" id="inputSuccess" placeholder="Name..." />
                                                                        </p>
                                                                        <p class="form-group" id="contact-email"> 
                                                                            <label for="email">Your Email</label>
                                                                            <input type="text" name="email" class="form-control email-contact" id="inputSuccess" placeholder="Email..." />
                                                                        </p>

                                                                        <p class="form-group" id="contact-message">
                                                                            <label for="message">Your Message</label>
                                                                            <textarea name="message" cols="88" rows="6" class="form-control message-contact" id="inputError" placeholder="Message..."></textarea>
                                                                        </p>
                                                                        <input type="reset" name="reset" value="CLEAR" class="reset">
                                                                        <!-- <input type="submit" name="submit" value="SEND MESSAGE" class="submit">-->

                                                                        <section class="button-demo" style="display: inline-block;">
                                                                            <button class="ladda-button submit send_email" name="submit" data-color="green" data-style="expand-left">SEND MESSAGE</button>
                                                                        </section>

                                                                    </form>
                                                                </div>
                                                                <!-- /Contact Form -->
                                                            </div>
                                                        </div>
                                                    </div>  

                                                </div>
                                            </div>
                                            <!-- End .contact -->

                                        </div>
                                        <!-- End #resp-tabs-container --> 

                                    </div><!-- End verticalTab -->

                                </div><!-- End flexy_content -->


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        <!-- End wrapper -->


        <!-- jquery | jQuery 1.11.0 -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <!-- Js | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 

        <!-- Js | jquery.cycle -->
        <!-- Credits: https://github.com/malsup/cycle2 -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>

        <!-- jquery | rotate and portfolio -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/HeadImage.js"></script>

        <!-- Js | easyResponsiveTabs -->
        <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.min.js"></script> 	

        <!-- Js | mCustomScrollbar -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>		

        <!-- jquery | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>

        <!-- Js | gmaps -->
        <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
<!--        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/gmaps.min.js"></script>-->

        <!-- Js | Js -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- code js for image rotate -->
        <script type="text/javascript">

            var mouseX;
            var mouseY;
            var imageOne;

            /* Calling the initialization function */
            $(init);

            /* The images need to re-initialize on load and on resize, or else the areas
             * where each image is displayed will be wrong. */
            $(window).load(init);
            $(window).resize(init);

            /* Setting the mousemove event caller */
            $(window).mousemove(getMousePosition);

            /* This function is called on document ready, on load and on resize
             * and initiallizes all the images */
            function init() {

                /* Instanciate the mouse position variables */
                mouseX = 0;
                mouseY = 0;

                /* Instanciate a HeadImage class for every image */
                imageOne = new HeadImage("one");

            }

            /* This function is called on mouse move and gets the mouse position. 
             * It also calls the HeadImage function to display the correct image*/
            function getMousePosition(event) {

                /* Setting the mouse position variables */
                mouseX = event.pageX;
                mouseY = event.pageY;

                /*Calling the setImageDirection function of the HeadImage class
                 * to display the correct image*/
                imageOne.setImageDirection();

            }

        </script>


        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </body>
</html>