<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Unite Invest | Our Difference Is You</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    
    <?php // wordpress head functions ?>
		<?php wp_head(); ?>
    <?php // end of wordpress head ?>
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/css/style.min.css" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/wp-content/themes/unite-invest/assets/css/theme/default.css" id="theme" rel="stylesheet" />
    <link href="/wp-content/themes/unite-invest/favicon.png" rel="icon">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/wp-content/themes/unite-invest/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="http://www.uniteinvest.co.uk/" class="navbar-brand">
                        <span class="brand-logo"></span>
                        <span class="brand-text">
                            <span class="text-theme">Unite</span> Invest
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home" data-click="scroll-to-target" data-toggle="dropdown">HOME <b class="caret"></b></a>
                            <!-- ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li><a href="index.html">Page with Transparent Header</a></li>
                                <li><a href="index_inverse_header.html">Page with Inverse Header</a></li>
                                <li><a href="index_default_header.html">Page with White Header</a></li>
                                <li><a href="extra_element.html">Extra Element</a></li>
                            </ul-->
                        </li>
                        <li><a href="#about" data-click="scroll-to-target">ABOUT</a></li>
                        <li><a href="#team" data-click="scroll-to-target">TEAM</a></li>
                        <li><a href="#service" data-click="scroll-to-target">SERVICES</a></li>
                        <li><a href="#work" data-click="scroll-to-target">WORK</a></li>
                        <li><a href="#client" data-click="scroll-to-target">CLIENT</a></li>
                        <li><a href="#pricing" data-click="scroll-to-target">PRICING</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">CONTACT</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        
        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/wp-content/themes/unite-invest/assets/img/home-bg.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Welcome to Unite Invest</h1>
                <h3>Our Difference Is You</h3>
                <p>
                    We help you create a compelling investment proposition taking the work our of client recommendations and reviews by integrating a set of services.
                </p>
                <a href="#" class="btn btn-theme">Explore More</a> <a href="#" class="btn btn-outline">Invest Now</a>
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->
        
        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About Us</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Our Difference</h3>
                            <p>
                                We configure our software towards your service standards and writing style – combining the disciplines of discretionary management, custodianship and technology to help you streamline the delivery of your client agreed services&hellip;
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <h3>Our Aim</h3>
                        <!-- begin about-author -->
                        <div class="about-author">
                            <div class="quote bg-silver">
                                <i class="fa fa-quote-left"></i>
                                    <h3>To systemise your processes, and pass the risk and hassle of building portfolios and maintaining them to a third party and provide you with all the tools you require to recommend and review client portfolios.</h3>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="/wp-content/themes/unite-invest/assets/img/user-1.jpg" alt="Sean Ngu" />
                                </div>
                                <div class="info">
                                    Sean Ngu
                                    <small>Front End Developer</small>
                                </div>
                            </div>
                        </div>
                        <!-- end about-author -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-12">
                        <h3>Our Experience</h3>
                        <!-- begin skills -->
                        <div class="skills">
                            <div class="skills-name">Discretionary Management</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 60%">
                                    <span class="progress-number">60%</span>
                                </div>
                            </div>
                            <div class="skills-name">Custodianship</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 40%">
                                    <span class="progress-number">40%</span>
                                </div>
                            </div>
                            <div class="skills-name">Technology</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 30%">
                                    <span class="progress-number">30%</span>
                                </div>
                            </div>
                            <div class="skills-name">Your services</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 100%">
                                    <span class="progress-number">100%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
    
        <!-- begin #milestone -->
        <div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/wp-content/themes/unite-invest/assets/img/milestone-bg.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="3513036168">	&pound;3,513,036,168</div>
                            <div class="title">Assets under Management</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="37000">37,000</div>
                            <div class="title">Client Accounts</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="36">36</div>
                            <div class="title">Different Models</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="7657">7657</div>
                            <div class="title">Libert SIPP Clients</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #milestone -->
        
        <!-- begin #team -->
        <div id="team" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Team</h2>
                <p class="content-desc">
                    Phasellus suscipit nisi hendrerit metus pharetra dignissim. Nullam nunc ante, viverra quis<br /> 
                    ex non, porttitor iaculis nisi.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="http://www.uniteinvest.co.uk/wp-content/uploads/2017/01/Lothar-1-e1486722078166.jpg" alt="Lothar Mentel" />
                            </div>
                            <div class="info">
                                <h3 class="name">Lothar Mentel</h3>
                                <div class="title text-theme">CHIEF INVESTMENT OFFICER - TATTON</div>
                                <p>Lothar heads the team that manage client portfolios and brief your advisers and clients of their sucess.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="http://www.uniteinvest.co.uk/wp-content/uploads/2017/01/Jerry-1-e1486722620708.png" alt="Jerry Hogarth" />
                            </div>
                            <div class="info">
                                <h3 class="name">Jerry Hogarth</h3>
                                <div class="title text-theme">DIRECTOR - AMBER</div>
                                <p>Jerry is in charge of custodian services ensuring client accounts are administered well.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- begin team -->
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="http://www.uniteinvest.co.uk/wp-content/uploads/2017/01/Ryan-01-1-e1486722536179.jpg" alt="Ryan Seaton" />
                            </div>
                            <div class="info">
                                <h3 class="name">Ryan Seaton</h3>
                                <div class="title text-theme">BUSINESS DEVELOPMENT MANAGER - TATTON</div>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #team -->
        
        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/wp-content/themes/unite-invest/assets/img/quote-bg.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Passion leads to design, design leads to performance, <br />
                        performance leads to <span class="text-theme">success</span>!  
                        <i class="fa fa-quote-right"></i>
                        <small>Sean Themes, Developer Teams in Malaysia</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->
        
        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Services</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Your client service portal</h4>
                                <p class="desc">Duis in lorem placerat, iaculis nisi vitae, ultrices tortor. Vestibulum molestie ipsum nulla. Maecenas nec hendrerit eros, sit amet maximus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-paint-brush"></i></div>
                            <div class="info">
                                <h4 class="title">Investment portfolios</h4>
                                <p class="desc">Etiam nulla turpis, gravida et orci ac, viverra commodo ipsum. Donec nec mauris faucibus, congue nisi sit amet, lobortis arcu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Documentation</h4>
                                <p class="desc">Ut vel laoreet tortor. Donec venenatis ex velit, eget bibendum purus accumsan cursus. Curabitur pulvinar iaculis diam.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-code"></i></div>
                            <div class="info">
                                <h4 class="title">Configured for you</h4>
                                <p class="desc">Aenean et elementum dui. Aenean massa enim, suscipit ut molestie quis, pretium sed orci. Ut faucibus egestas mattis.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-shopping-cart"></i></div>
                            <div class="info">
                                <h4 class="title">Online only</h4>
                                <p class="desc">Quisque gravida metus in sollicitudin feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Free Support</h4>
                                <p class="desc">Integer consectetur, massa id mattis tincidunt, sapien erat malesuada turpis, nec vehicula lacus felis nec libero. Fusce non lorem nisl.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
        
        <!-- beign #action-box -->
        <!-- div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <!-- div class="content-bg">
                <img src="/wp-content/themes/unite-invest/assets/img/action-bg.jpg" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <!-- div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <!-- div class="row action-box">
                    <!-- begin col-9 -->
                    <!-- div class="col-md-9 col-sm-9">
                        <div class="icon-large text-theme">
                            <i class="fa fa-binoculars"></i>
                        </div> 
                        <h3>CHECK OUT OUR ADMIN THEME!</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus magna eu lacinia eleifend.
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <!-- div class="col-md-3 col-sm-3">
                        <a href="#" class="btn btn-outline btn-block">Live Preview</a>
                    </div>
                    <!-- end col-3 -->
                <!-- /div>
                <!-- end row -->
            <!-- /div>
            <!-- end container -->
        <!--/div>
        <!-- end #action-box -->
        
        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Our Unique Services</h2>
                <p class="content-desc">
                    We have combined some unique services to enable you to run an efficient financial planning practice:
                </p>
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/partners.png" alt="Partners" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Best of breed partners</span>
                                <span class="desc-text">We feed their services into our technology.</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/reports.png" alt="Reports" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Reports configured to your brand</span>
                                <span class="desc-text">Defined to your services, standards &amp; style.</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/dashboard.png" alt="Dashboard" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Our Dashboard</span>
                                <span class="desc-text">All you require to run client reviews.</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/standards" alt="Standards" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Service Standard Compliance</span>
                                <span class="desc-text">Configured to track your client bank.</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/work-2.jpg" alt="Work 2" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Suspendisse at mattis odio</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/work-4.jpg" alt="Work 4" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam vitae commodo diam</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/work-6.jpg" alt="Work 6" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Phasellus eu vehicula lorem</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="/wp-content/themes/unite-invest/assets/img/work-8.jpg" alt="Work 8" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Morbi bibendum pellentesque</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->
        
        <!-- begin #client -->
        <div id="client" class="content has-bg bg-green" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="/wp-content/themes/unite-invest/assets/img/client-bg.jpg" alt="Client" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInUp">
                <h2 class="content-title">Our Client Testimonials</h2>
                <!-- begin carousel -->
                <div class="carousel testimonials slide" data-ride="carousel" id="testimonials">
                    <!-- begin carousel-inner -->
                    <div class="carousel-inner text-center">
                        <!-- begin item -->
                        <div class="item active">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra, nulla ut interdum fringilla,<br />
                                urna massa cursus lectus, eget rutrum lectus neque non ex.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Mark Doe</span>, Designer</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Donec cursus ligula at ante vulputate laoreet. Nulla egestas sit amet lorem non bibendum.<br />
                                Nulla eget risus velit. Pellentesque tincidunt velit vitae tincidunt finibus.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Joe Smith</span>, Developer</div>
                        </div>
                        <!-- end item -->
                        <!-- begin item -->
                        <div class="item">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                Sed tincidunt quis est sed ultrices. Sed feugiat auctor ipsum, sit amet accumsan elit vestibulum<br />
                                fringilla. In sollicitudin ac ligula eget vestibulum.
                                <i class="fa fa-quote-right"></i>
                            </blockquote>
                            <div class="name"> — <span class="text-theme">Linda Adams</span>, Programmer</div>
                        </div>
                        <!-- end item -->
                    </div>
                    <!-- end carousel-inner -->
                    <!-- begin carousel-indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="1" class=""></li>
                        <li data-target="#testimonials" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- end carousel-indicators -->
                </div>
                <!-- end carousel -->
            </div>
            <!-- end containter -->
        </div>
        <!-- end #client -->
        
        <!-- begin #pricing -->
        <div id="pricing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Price</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin pricing-table -->
                <ul class="pricing-table col-4">
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>Software &amp; Support</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">FREE</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>1GB Storage</li>
                                <li>2 Clients</li>
                                <li>5 Active Projects</li>
                                <li>5 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>GIA</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$9.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>2GB Storage</li>
                                <li>5 Clients</li>
                                <li>10 Active Projects</li>
                                <li>10 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li class="highlight" data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>ISA</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$19.99</span>
                                    <span class="price-tenure">per month</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>5GB Storage</li>
                                <li>10 Clients</li>
                                <li>20 Active Projects</li>
                                <li>20 Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-theme btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li data-animation="true" data-animation-type="fadeInUp">
                        <div class="pricing-container">
                            <h3>SIPP</h3>
                            <div class="price">
                                <div class="price-figure">
                                    <span class="price-number">$999</span>
                                </div>
                            </div>
                            <ul class="features">
                                <li>Unlimited Storage</li>
                                <li>Unlimited Clients</li>
                                <li>Unlimited Projects</li>
                                <li>Unlimited Colors</li>
                                <li>Free Goodies</li>
                                <li>24/7 Email support</li>
                            </ul>
                            <div class="footer">
                                <a href="#" class="btn btn-inverse btn-block">Buy Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </div>
        <!-- end #pricing -->
        
        <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Contact Us</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <h3>If you have a project you would like to discuss, get in touch with us.</h3>
                        <p>
                            Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                        </p>
                        <p>
                            <strong>SeanTheme Studio, Inc</strong><br />
                            795 Folsom Ave, Suite 600<br />
                            San Francisco, CA 94107<br />
                            P: (123) 456-7890<br />
                        </p>
                        <p>
                            <span class="phone">+11 (0) 123 456 78</span><br />
                            <a href="mailto:hello@emailaddress.com">seanthemes@support.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                        <?php gravity_form( 1, false, false, false, '', false ); ?>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->
        
        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div class="footer-brand-logo"></div>
                    Unite Invest
                </div>
                <p>
                    &copy; Copyright Unite Invest 2017 <br />
                    Our Difference is You
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="https://twitter.com/unite_invest"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div>
        <!-- end #footer -->
        
        <!-- begin theme-panel>
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                </ul>
            </div>
        </div>
        <!-- end theme-panel -->
    </div>
    <!-- end #page-container -->
    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/wp-content/themes/unite-invest/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/wp-content/themes/unite-invest/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/wp-content/themes/unite-invest/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/wp-content/themes/unite-invest/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/wp-content/themes/unite-invest/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/wp-content/themes/unite-invest/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/wp-content/themes/unite-invest/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/wp-content/themes/unite-invest/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
	<script src="/wp-content/themes/unite-invest/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
