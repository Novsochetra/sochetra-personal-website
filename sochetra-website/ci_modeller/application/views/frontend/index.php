<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>FlexyCard HTML5 Responsive vCard Template - FlexyCodes Themes</title>

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

        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/customize-main.css">

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
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
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
                                                <h1 class="h-bloc">Portfolio - My Works</h1>

                                                <!-- .container-portfolio -->
                                                <div class="container-portfolio">

                                                    <!-- #filters -->
                                                    <ul id="filters" class="clearfix">
                                                        <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">All</span></li>
                                                        <li><span class="filter" data-filter="catWeb">Web Design</span></li>
                                                        <li><span class="filter" data-filter="catGraphic">Graphic Design</span></li>
                                                        <li><span class="filter" data-filter="catMotion">Motion Graphic</span></li>
                                                        <li><span class="filter" data-filter="logo">Logo</span></li>
                                                    </ul>
                                                    <!-- /#filters -->

                                                    <!-- #portfoliolist -->
                                                    <div id="portfoliolist">

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">	
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>		
                                                        <!-- /.portfolio -->



                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">	
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">		
                                                                <a href="http://www.youtube.com/watch?v=c9MnSeYYtYY" rel="portfolio">

                                                                    <img src="http://placehold.it/600x849" alt="Visual Infography" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Web Design</span>
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
                                                                <a href="http://placehold.it/600x849" rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Sonor's Design" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Web design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>				
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">			
                                                                <a href="http://placehold.it/600x849" rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Typography Company" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Motion Graphic</span>
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
                                                                <a href="http://placehold.it/600x849" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="Weatherette" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Web Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catMotion" data-cat="catMotion">
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catGraphic" data-cat="catGraphic">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">		
                                                                <a href="http://placehold.it/600x849" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">				
                                                                    <img src="http://placehold.it/600x849" alt="Techlion" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Graphic Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catWeb" data-cat="catWeb">
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio catGraphic" data-cat="catGraphic">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">	
                                                                <a href="http://placehold.it/600x849" rel="portfolio">
                                                                    <img src="http://placehold.it/600x849" alt="QR Quick Response" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title">Project Name</a>
                                                                            <span class="text-category">Graphic Design</span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <!-- .portfolio -->
                                                        <div class="portfolio logo" data-cat="logo">
                                                            <!-- .portfolio-wrapper -->
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
                                                            <!-- /.portfolio-wrapper -->
                                                        </div>	
                                                        <!-- /.portfolio -->

                                                        <div class="clear"></div>

                                                    </div>
                                                    <!-- #portfoliolist -->
                                                </div>
                                                <!-- /.container-portfolio -->
                                            </div>
                                            <!-- End .portfolio -->
<!-- This is the blog page -->
                                            <!-- .blog -->
                                            <div id="blog" class="content_2">
                                                <h1 class="h-bloc">Blog - My Blog</h1><br> 

                                                <div class="col-md-12">
                                                    <div class="row">

                                                        <!-- Page Blog -->
                                                        <div class="col-md-12" id="blog_page">
                                                            <!-- start Page Blog -->
                                                            <section id="blog-page">

                                                                <!-- Post 1 -->	
                                                                <article id="post-1" class="blog-article">                    

                                                                    <div class="col-md-12">

                                                                        <div class="row">

                                                                            <div class="col-md-12 post_media">
                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                                                                </div>
                                                                                <div class="media">
                                                                                    <div class="he-wrap tpl2">
                                                                                        <div id="carousel-1" class="carousel slide" data-ride="carousel">

                                                                                            <ol class="carousel-indicators">
                                                                                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                                                                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                                                                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                                                                            </ol>

                                                                                            <div class="carousel-inner">

                                                                                                <div class="item active">
                                                                                                    <img src="http://placehold.it/825x340" alt="" />
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="item">
                                                                                                    <img src="http://placehold.it/825x340" alt="" />
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="item">
                                                                                                    <img src="http://placehold.it/825x340" alt="" />
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                            <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                                                                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                                                            </a>

                                                                                            <a class="right carousel-control" href="#carousel-1" data-slide="next">
                                                                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                                                            </a>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12 post_content">
                                                                                <div class="content post_format_standart">
                                                                                    <div class="top_c ">

                                                                                        <div class="title_content">
                                                                                            <div class="text_content"><a href="#post-1" class="read_more">Blog Post Gallery</a></div>
                                                                                            <div class="clear"></div>
                                                                                        </div>

                                                                                        <ul class="info">
                                                                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                            <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                                                                        </ul>

                                                                                        <div class="blog-content">
                                                                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                                                                    </div>
                                                                                </div>	

                                                                                <a href="#post-1" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </article>
                                                                <!-- End Post 1 -->

                                                                <div class="clear"></div>

                                                                <!-- Post 2 -->
                                                                <article id="post-2" class="blog-article">                    

                                                                    <div class="col-md-12">

                                                                        <div class="row">

                                                                            <div class="col-md-12 post_media">

                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12 post_content">
                                                                                <div class="content post_format_standart">
                                                                                    <div class="top_c ">

                                                                                        <div class="title_content">
                                                                                            <div class="text_content"><a href="#post-2" class="read_more">Blog Aside post</a></div>
                                                                                            <div class="clear"></div>
                                                                                        </div>

                                                                                        <ul class="info">
                                                                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                            <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                                                                        </ul>

                                                                                        <div class="blog-content">
                                                                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                                                                    </div>
                                                                                </div>	

                                                                                <a href="#post-2" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </article>
                                                                <!-- End Post 2 -->

                                                                <div class="clear"></div>

                                                                <!-- Post 3 -->
                                                                <article id="post-3" class="blog-article">                    

                                                                    <div class="col-md-12">

                                                                        <div class="row">

                                                                            <div class="col-md-12 post_media">

                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                                                                </div>

                                                                                <div class="media">
                                                                                    <div class="he-wrap tpl2">
                                                                                        <img src="http://placehold.it/825x340" class="img-hover" alt="" />
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12 post_content">
                                                                                <div class="content post_format_standart">
                                                                                    <div class="top_c ">

                                                                                        <div class="title_content">
                                                                                            <div class="text_content"><a href="#post-3" class="read_more">Blog Post Image</a></div>
                                                                                            <div class="clear"></div>
                                                                                        </div>

                                                                                        <ul class="info">
                                                                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                            <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                                                                        </ul>

                                                                                        <div class="blog-content">
                                                                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                                                                    </div>
                                                                                </div>	

                                                                                <a href="#post-3" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </article>

                                                                <!-- End Post 3 -->

                                                            </section>

                                                            <!-- End Page Blog -->



                                                            <!-- Page Blog - Post 1 -->
                                                            <section id="post-1-page" class="content-post" style="display: none">
                                                                <div class="row inner">

                                                                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                                                                        <article class="postPage">

                                                                            <div class="col-md-12 post_media">
                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                                                                </div>
                                                                                <div class="media">
                                                                                    <div class="he-wrap tpl2">
                                                                                        <div id="carousel-2" class="carousel slide" data-ride="carousel">

                                                                                            <ol class="carousel-indicators">
                                                                                                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                                                                                <li data-target="#carousel-2" data-slide-to="1"></li>
                                                                                                <li data-target="#carousel-2" data-slide-to="2"></li>
                                                                                            </ol>

                                                                                            <div class="carousel-inner">

                                                                                                <div class="item active">
                                                                                                    <img src="http://placehold.it/825x340" alt="">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="item">
                                                                                                    <img src="http://placehold.it/825x340" alt="">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="item">
                                                                                                    <img src="http://placehold.it/825x340" alt="">
                                                                                                    <div class="carousel-caption">
                                                                                                        <h4>First Thumbnail label</h4>
                                                                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>


                                                                            <div class="title_content">
                                                                                <div class="text_content">Blog Post Gallery</div>
                                                                                <div class="clear"></div>
                                                                            </div>

                                                                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                                                            <div class="col-md-12 first">
                                                                                <div class="info">
                                                                                    <div>
                                                                                        <span class="tag">#php</span>
                                                                                        <span class="tag">#web</span>
                                                                                        <span class="tag">#web design</span>
                                                                                    </div>


                                                                                    <ul class="info-post">
                                                                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                        <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="about_author">
                                                                                    <div class="title_content" style="margin-bottom:10px">
                                                                                        <div class="text_content">BILL GATES</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>

                                                                                    <div class="prg_content">
                                                                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                                                                        <div class="text">
                                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                                            adipiscing elit. Praesent condimentum sed elit
                                                                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                            amet cursus libero. In fringilla egestas ornare.
                                                                                        </div>

                                                                                        <div class="nb_post" style="margin-top: 10px;">
                                                                                            <b id="nb_post"> 15 posts</b> created by author
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="clear"></div>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="post_comments">

                                                                                    <div class="title_content">
                                                                                        <div class="text_content">7 Comments</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>

                                                                                    <div class="comments">

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->



                                                                                    </div><!-- .post_comments -->

                                                                                    <div class="clear"></div>      


                                                                                    <div class="comment_form">
                                                                                        <div class="title_content">
                                                                                            <div class="text_content">Leave A Comment</div>
                                                                                            <div class="clear"></div>
                                                                                        </div>


                                                                                        <form method="post" id="comment_form">
                                                                                            <p class="form-group" id="contact-name">
                                                                                                <label for="name">Your Name</label>
                                                                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                                                            </p>
                                                                                            <p class="form-group" id="contact-email"> 
                                                                                                <label for="email">Your Email</label>
                                                                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                                                            </p>

                                                                                            <p class="form-group" id="contact-message">
                                                                                                <label for="message">Your Message</label>
                                                                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                                                            </p>
                                                                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                                                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                                                                        </form>                        
                                                                                        <div class="clear"></div>

                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-md-12" style="margin-top: 20px;">
                                                                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                                                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                                                                </div>

                                                                                <div class="clear"></div>

                                                                        </article>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </section>
                                                            <!-- End Page Blog - Post 1 -->

                                                            <!-- Page Blog - Post 2 -->
                                                            <section id="post-2-page" class="content-post" style="display: none">
                                                                <div class="row inner">

                                                                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                                                                        <article class="postPage">

                                                                            <div class="col-md-12 post_media">

                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                                                                </div>

                                                                            </div>

                                                                            <div class="title_content">
                                                                                <div class="text_content">BLOG ASIDE POST</div>
                                                                                <div class="clear"></div>
                                                                            </div>


                                                                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                                                            <div class="col-md-12 first">
                                                                                <div class="info">
                                                                                    <div>
                                                                                        <span class="tag">#php</span>
                                                                                        <span class="tag">#web</span>
                                                                                        <span class="tag">#web design</span>
                                                                                    </div>


                                                                                    <ul class="info-post">
                                                                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                        <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="about_author">
                                                                                    <div class="title_content" style="margin-bottom:10px">
                                                                                        <div class="text_content">BILL GATES</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>


                                                                                    <div class="prg_content">
                                                                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                                                                        <div class="text">
                                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                                            adipiscing elit. Praesent condimentum sed elit
                                                                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                            amet cursus libero. In fringilla egestas ornare.
                                                                                        </div>

                                                                                        <div class="nb_post" style="margin-top: 10px;">
                                                                                            <b id="nb_post"> 15 posts</b> created by author
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="clear"></div>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="post_comments">

                                                                                    <div class="title_content">
                                                                                        <div class="text_content">7 Comments</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>

                                                                                    <div class="comments">

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->



                                                                                    </div><!-- .post_comments -->

                                                                                    <div class="clear"></div>      


                                                                                    <div class="comment_form">

                                                                                        <div class="title_content">
                                                                                            <div class="text_content">Leave A Comment</div>
                                                                                            <div class="clear"></div>
                                                                                        </div>


                                                                                        <form method="post" id="comment_form">
                                                                                            <p class="form-group" id="contact-name">
                                                                                                <label for="name">Your Name</label>
                                                                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                                                            </p>
                                                                                            <p class="form-group" id="contact-email"> 
                                                                                                <label for="email">Your Email</label>
                                                                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                                                            </p>

                                                                                            <p class="form-group" id="contact-message">
                                                                                                <label for="message">Your Message</label>
                                                                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                                                            </p>
                                                                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                                                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                                                                        </form>                        
                                                                                        <div class="clear"></div>

                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-md-12"  style="margin-top: 20px;">
                                                                                    <a href="#post-3" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                                                                    <a href="#post-1" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                                                                </div>

                                                                                <div class="clear"></div>

                                                                        </article>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </section>
                                                            <!-- End Page Blog - Post 2 -->

                                                            <!-- Page Blog - Post 3 -->
                                                            <section id="post-3-page" class="content-post" style="display: none">
                                                                <div class="row inner">

                                                                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                                                                        <article class="postPage">


                                                                            <div class="col-md-12 post_media">

                                                                                <div class="post-format-icon">
                                                                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                                                                </div>

                                                                                <div class="media">
                                                                                    <div class="he-wrap tpl2">
                                                                                        <img src="http://placehold.it/825x340" class="img-hover" alt="">
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <div class="title_content">
                                                                                <div class="text_content">BLOG POST IMAGE</div>
                                                                                <div class="clear"></div>
                                                                            </div>


                                                                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                                                                            <div class="col-md-12 first">
                                                                                <div class="info">
                                                                                    <div>
                                                                                        <span class="tag">#php</span>
                                                                                        <span class="tag">#web</span>
                                                                                        <span class="tag">#web design</span>
                                                                                    </div>


                                                                                    <ul class="info-post">
                                                                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                                                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                                                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                                                                        <li><i class="glyphicon glyphicon-tag"></i> Photoshop</li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="about_author">
                                                                                    <div class="title_content" style="margin-bottom:10px">
                                                                                        <div class="text_content">BILL GATES</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>


                                                                                    <div class="prg_content">
                                                                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                                                                        <div class="text">
                                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                                            adipiscing elit. Praesent condimentum sed elit
                                                                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                            amet cursus libero. In fringilla egestas ornare.
                                                                                        </div>

                                                                                        <div class="nb_post" style="margin-top: 10px;">
                                                                                            <b id="nb_post"> 15 posts</b> created by author
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="clear"></div>
                                                                                </div>

                                                                                <div class="clear"></div>      


                                                                                <div class="post_comments">

                                                                                    <div class="title_content">
                                                                                        <div class="text_content">7 Comments</div>
                                                                                        <div class="clear"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>

                                                                                    <div class="comments">

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="comment sub">
                                                                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                                <div class="text">
                                                                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                                                                    <div class="date">12, September, 2013</div>
                                                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                                                    adipiscing elit. Praesent condimentum sed elit
                                                                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                    amet cursus libero. In fringilla egestas ornare.
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->

                                                                                        <div class="comment">
                                                                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                                                            <div class="text">
                                                                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                                                                <div class="date">12, September, 2013</div>
                                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                                adipiscing elit. Praesent condimentum sed elit
                                                                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                                                                amet cursus libero. In fringilla egestas ornare.
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div><!-- .comments -->



                                                                                    </div><!-- .post_comments -->

                                                                                    <div class="clear"></div>      


                                                                                    <div class="comment_form">

                                                                                        <div class="title_content">
                                                                                            <div class="text_content">Leave A Comment</div>
                                                                                            <div class="clear"></div>
                                                                                        </div>


                                                                                        <form method="post" id="comment_form">
                                                                                            <p class="form-group" id="contact-name">
                                                                                                <label for="name">Your Name</label>
                                                                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                                                                            </p>
                                                                                            <p class="form-group" id="contact-email"> 
                                                                                                <label for="email">Your Email</label>
                                                                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                                                                            </p>

                                                                                            <p class="form-group" id="contact-message">
                                                                                                <label for="message">Your Message</label>
                                                                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                                                                            </p>
                                                                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                                                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                                                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                                                                        </form>                        
                                                                                        <div class="clear"></div>

                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-12" style="margin-top: 20px;">
                                                                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                                                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                                                    <a href="#blog" id="blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                                                                </div>

                                                                                <div class="clear"></div>

                                                                        </article>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </section>
                                                            <!-- End Page Blog - Post 3 -->


                                                        </div>


                                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h3 class="modal-title h3_modal" style="color: #fff !important;">FlexyVcard - Responsive Vcard Template</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>FlexyVcard is an impressive and professional online vcard, a beautiful portfolio with sliding effect, resume and contact information with Google map.</p>
                                                                        <p>It’s simple! Just download and install in a few minutes, you can show your online card to your friend, customer or employer in an interview by phone or tablet. Because FlexyVcard is a responsive template, you can view your website on pc as well as handheld devices. You can also link to your social profiles, display your portfolio in many media format such as image, youtube video, flash...</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- End .blog -->
<!-- This is the page Contact -->
                                            <!-- .contact -->
                                            <div id="contact" class="content_2">

                                                <h1 class="h-bloc">Contact - Contact Me</h1>


                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div id="map"></div>
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
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> Adress:</span> San Francisco , CA.<br /><br /></li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> Email:</span> brown.smith@gmail.com</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> Phone:</span> +123 456 789 111</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:</span> www.brown-smith.com</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-comment"></i> Skype:</span> brown-smith-skype</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-thumbs-up"></i> G. Drive:</span> brown-s-gm@gmail.com</li>
                                                                        <li><span class="span-info"><i class="glyphicon glyphicon-unchecked"></i> Skydrive:</span> brown-s-sk@hotmail.com</li>
                                                                    </ul>
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
                                                                    <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                                                    <a href="#"><i class="fa fa-foursquare"></i></a>
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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gmaps.min.js"></script>

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