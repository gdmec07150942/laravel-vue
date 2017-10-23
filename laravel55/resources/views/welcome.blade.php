<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- mobile specific metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">
    <!-- script
================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <!-- favicons
================================================== -->
    <link rel="icon" type="image/png" href="abc.jpg"><!-- 这是网页图标的地址-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>laravel+vue</title>

</head>
<body id="top">
<!-- header
================================================== -->
<header>
    <div class="row">

        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                <a href="index.html">KARDS</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation">
                    <li class="current"><a class="smoothscroll" href="#intro" title="">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="">About</a></li>
                    <li><a class="smoothscroll" href="#resume" title="">Resume</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
                    <li><a class="smoothscroll" href="#services" title="">Services</a></li>
                    <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
                    <li><a href="styles.html" title="">Style Demo</a></li>
                </ul>
            </nav>
        </div> <!-- /top-bar -->

    </div> <!-- /row -->
</header> <!-- /header -->
<!-- intro section
================================================== -->
<section id="intro">

    <div class="intro-overlay"></div>

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>欢迎你们的到来,记住！技术丰富我们的生活</h5>
                <br>
                <h1>I'm Mr 许 </h1>

                <p class="intro-position">
                    <span>仰望星空</span>
                    <span>追逐梦想</span>
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">关于我的更多</a>

            </div>

        </div>
    </div> <!-- /intro-content -->
    <div id="app">
        <example></example>

    </div>
    <!-- /intro-social -->

</section> <!-- /intro -->
<!-- about section
================================================== -->
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src="images/profile-pic.jpg" alt="Profile Picture">

                <p class="lead">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea
                    eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam
                    labore consectetur ea id quis eiusmod.</p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Juan Dela Cruz</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>September 28, 1987</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Freelancer, Frontend Developer</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.kardswebsite.com</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>me@kardswebsite.com</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>

                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Wordpress</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div>

</section> <!-- /process-->


<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>