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
                    <li class="current"><a class="smoothscroll" href="#intro" title="">首页</a></li>
                    <li><a class="smoothscroll" href="#about" title="">关于我自己</a></li>
                    <li><a class="smoothscroll" href="#resume" title="">我的经历</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="">我的文章</a></li>
                    <li><a class="smoothscroll" href="#contact" title="">联系我</a></li>
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
            <a id="dianzan" href="#about" title="Download CV" class="button button-primary" onclick="show()">喜欢就赞~\(≧▽≦)/~吧<i
                        class="fa fa-heart-o"></i></a>
        </div>
    </div>
    <div id="win">
        <div id="title">谢谢你的点赞,这是本站第n个点赞咯！</div>
    </div>
</section> <!-- /process-->
<!-- resume Section
================================================== -->
<section id="resume" class="grey-section">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>我的经历</h5>
            <h1>往下看就知道咯～</h1>

            <p class="lead">摘不到的星星，总是最闪亮的。</p>
            <p class="lead">溜掉的小鱼，总是最美丽的。</p>
            <p class="lead">错过的电影，总是最好看的。</p>
            <p class="lead">失去的情人，总是最懂我的。</p>
            <p class="lead">我始终不明白，这究竟是什么道理。</p>

            <span>——几米 《听几米唱歌》</span>

        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>工作经历</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>PHP后台工程师</h3>
                        <p>June 2017 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Laravel</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Front-end Developer</h3>
                        <p>July 2014 - June 2015</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Super Cool Agency</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Web Designer</h3>
                        <p>May 2013 - June 2014</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Great Designs Studio</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Master Degree</h3>
                        <p>July 2015 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>University of Life</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Bachelor Degree</h3>
                        <p>July 2014 - June 2015</p>
                    </div>

                    <div class="timeline-content">
                        <h4>State Design University</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Bachelor Degree</h3>
                        <p>May 2013 - June 2014</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Design College</h4>
                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat
                            laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse
                            cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

</section> <!-- /features -->
<!-- Portfolio Section
================================================== -->
<section id="portfolio">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>我的文章</h5>
            <h1>因兴趣使然而做的文章</h1>

        </div>
    </div> <!-- /section-intro-->
    <div id="articles">
        <articles></articles>
    </div>

</section> <!-- /portfolio -->
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi
                aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

        </div>
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2"
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value=""
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50"
                                  required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- /col-twelve -->

    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>我的位置</h5>

            <p>
                高德置地广场<br>
                从珠江新城站下车走路十分钟就到了<br>
            </p>

        </div>
        <div class="col-four tab-full">

            <div class="icon">

            </div>


        </div>
        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>我的邮箱</h5>

            <p>554061700@qq.com
            </p>

        </div>


    </div> <!-- /contact-info -->

</section> <!-- /contact -->
<!-- footer
================================================== -->

<footer>
    <div class="row">
        <div class="col-six tab-full">
            <div class="copyright">
                <span>Copyright &copy; 2017.涛涛仿造的一个网页模板</span>
            </div>
        </div>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->
</footer>
<script type="text/javascript">
    function show() {
        var winNode = $("#win");
        winNode.show("slow");
        setTimeout(hide, 2000);
    }

    function hide() {
        var winNode = $("#win");
        winNode.hide("slow");
    }


</script>

<script src="{{ mix('js/app.js') }}"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>