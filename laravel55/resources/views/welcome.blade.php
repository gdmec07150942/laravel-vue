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
    <script src="js/jquery-2.1.3.min.js"></script>
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

            <h5>关于我自己</h5>
            <h1>一个还是年轻活泼的boy</h1>

            <div class="intro-info">

                <img src="abc.jpg" alt="Profile Picture">

                <p class="lead">一个积极认真,努力向上的活泼小伙子～。我觉得一个程序猿不仅技术要进步,口才也是要同时进步才行,但也同时需要劳逸结合。
                    我不喜欢熬夜,因为熬夜的隔天就会头脑混乱,不利于自己进行工作。我喜欢和别人聊天,这样会让我觉得我的生活不单单是打代码，更多的是享受生活。</p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>我的档案</h3>
            <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>许XX</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>96后boy</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>当然是一个工作认真的程序猿啦～</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.heroft.com</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>554061700@qq.com</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>我的技能</h3>
            <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent65"><span>65%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>

                    <div class="progress percent60"><span>60%</span></div>
                    <strong>vue</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">打赏我吧（づ￣3￣）づ╭❤～</a>
            <a id="dianzan" href="#" title="Download CV" class="button button-primary" onclick="show()">喜欢就赞~\(≧▽≦)/~吧<i
                        class="fa fa-heart-o"></i></a>

        </div>
    </div>
    <div id="win">
        <div id="title">我是标题栏！<span id="close" onclick="hide()">X</span></div>
        <div id="content">我是一个窗口！</div>
    </div>
</section> <!-- /process-->
<script type="text/javascript">
    function show() {
        var winNode = $("#win");
        winNode.show("slow");
    }
</script>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>