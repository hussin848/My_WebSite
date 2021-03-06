<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hussein Al-Daly Full Stack Dev</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Full Stack Developer , back-end , front-end , C# , Java , Kotlin , Android, B4A, PHP , Laravel Framework , PDO , Asp.Net MVC , Ado.Net ,   Asp.Net Core , javascript , git , bootstrap , jquery , ajax , laravel , mysql , iis , sql server , flutter , react , nodejs"
        name="keywords">
    <meta content="Full Stack Developer" name="description">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <script>
        var head = document.getElementsByTagName('HEAD')[0];

        // Create new link Element
        var link = document.createElement('link');

        // set the attributes for link element
        link.rel = 'stylesheet';

        link.type = 'text/css';

        var items = Array("style-blue.css", "style-green.css", "style-orange.css", "style-purple.css", "style-red.css",
            "style-sky-blue.css");

        link.href = "css/" + items[Math.floor(Math.random() * items.length)];

        // Append link element to HTML head
        head.appendChild(link);

        function calculate_age(dob) {
            var diff_ms = Date.now() - dob.getTime();
            var age_dt = new Date(diff_ms);

            return Math.abs(age_dt.getUTCFullYear() - 1970);
        }
    </script>
    <style type="text/css">
        .text-slider {
            font-size: larger;
            font-weight: 900;
        }

        .input-group {
            margin-top: 30px;
            position: relative;
        }

        .input-group {
            position: relative;
        }

        .input-group-addon {
            border: none;
        }

        .linkname {
            display: none;
        }

        #copyButton {
            cursor: pointer;
            background: #cac8c4;
        }

        #copyTarget {
            border-left: none;
        }

        #copyButton1 {
            cursor: pointer;
            background: #cac8c4;
        }

        #copyTarget1 {
            border-left: none;
        }

        #copyButton2 {
            cursor: pointer;
            background: #cac8c4;
        }

        #copyTarget2 {
            border-left: none;
        }

        .copied {
            opacity: 1;
            position: absolute;
            left: 55px;
            z-index: -1;
        }

        .copied1 {
            opacity: 1;
            position: absolute;
            left: 55px;
            z-index: -1;
        }

        .copied2 {
            opacity: 1;
            position: absolute;
            left: 55px;
            z-index: -1;
        }

        @media (min-width: 768px) {
            .copied {
                left: 135px;
                z-index: -1;
            }

            .copied1 {
                left: 135px;
                z-index: -1;
            }

            .copied2 {
                left: 135px;
                z-index: -1;
            }

            .linkname {
                display: block;
                background: #3b3e45;
                color: #fff;
            }
        }

        .inputs-nyn::placeholder {
            text-align: right;
        }

        @media screen and (max-width: 450px) {
            .lolo {
                width: auto !important;
                height: 50px !important;
            }
        }

    </style>
</head>

<body id="page-top">
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container" style="direction: rtl;padding: 0px;">
            <div style="display: contents;direction: ltr;">
                <a href="" class="navbar-brand"><img src="img/favicon.png?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                        class="img-fluid lolo" style="width: auto; height: 80px ;"></a>
                <a class="nav-link" target="_blank" href="https://www.linkedin.com/in/hussein-al-daly-a59698101/"
                    style="padding-left: 2px; padding-right: 2px; padding-bottom: 10px; padding-top: 10px;contain: paint;display: inline-grid;"><i
                        class="fa fa-2x fa-linkedin-square" style="margin-inline: auto;"></i><span
                        style="font-size: xx-small;">LinkedIn</span></a>
                <a class="nav-link" target="_blank" href="https://github.com/hussin848"
                    style="padding: 10px 2px;contain: paint;display: inline-grid;"><i
                        class="fa fa-2x fa-github" style="margin-inline: auto;"></i><span
                        style="font-size: xx-small;">GitHub</span></a>
                <a class="nav-link" href="{{url('/')}}"
                    style="padding-left: 0px; padding-right: 0px; padding-bottom: 10px; padding-top: 10px;contain: paint;display: inline-grid;margin:10px"><img
                        src="img/ar.png" alt="" class="img-fluid"
                        style="width: 32px; height: 20px ;border-style: solid; border-width: thin;margin-top: 6px;margin-left: 2px; margin-right: 2px; justify-self: center;max-width: fit-content;"><span
                        style="font-size: small; margin-inline: auto;">????????</span></a>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarDefault" style="direction: ltr;">
                <ul class="navbar-nav" style="padding: unset;">
                    <li class="nav-item" style="align-self: self-start;padding: 0px">
                        <a class="nav-link js-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;padding: 0px">
                        <a class="nav-link js-scroll" href="#about">Brief</a>
                    </li>

                    <li class="nav-item" style="align-self: self-start;padding: 0px">
                        <a class="nav-link js-scroll" href="#work">Projects</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;padding: 0px">
                        <a class="nav-link js-scroll" href="#service">Experiences</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;padding: 0px">
                        <a class="nav-link js-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->
    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image"
        style="background-image: url('img/intro-bg.jpg');background-position: center;">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<h1 class="intro-title mb-4">The Programer Mohamad Kamel</h1> -->
                    <p class="intro-subtitle"><span class="text-slider-items">Programmer Hussein Al-Daly ,Full Stack
                            Developer,Back-End Developer,Front-End Developer,Project Developer,Web Developer,Desktop App
                            Developer,Mobile App Developer</span><strong
                            class="text-slider"></strong> </p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Brief of My Life </h3>
                        <p class="subtitle-a">
                            A brief overview of my career biography summed up in a few words </p>
                        <div class="line-mf"></div>
                    </div>
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row" style="direction: rtl;">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="img/85208905.png?<?php echo date(' Y-m-d H:i:s '); ?>"
                                                class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info" style="direction: ltr;">
                                            <p><span class="title-s">Name : </span> <span>Hussein Al-Daly</span>
                                            </p>
                                            <p><span class="title-s">Occupation : </span> <span> Full Stack
                                                    Developer</span> </p>
                                            <script>
                                                document.write(calculate_age(new Date(1996, 3, 1)));
                                            </script> years
                                                    old</span> </p>
                                            <p><span class="title-s">Marital status : </span> <span>single
                                                   </span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s" style="text-align: justify;appearance: auto;">Of
                                        Experiences</p>
                                    <span>HTML5 - CSS3 - jQuery - Bootstrap</span>
                                    <span class="pull-right">80%</span>
                                    <div class="progress" style="margin-bottom: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span>PHP Laravel FrameWork</Frame>
                                    </span>
                                    <span class="pull-right">85%</span>
                                    <div class="progress" style="margin-bottom: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>C# MVC</span>
                                    <span class="pull-right">70%</span>
                                    <div class="progress" style="margin-bottom: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>



                                    <span>Flutter Dart Language</span>
                                    <span class="pull-right">70%</span>
                                    <div class="progress" style="margin-bottom: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>MVC ( Model - View - Controller )<br />Design Pattern For Any Project</span>
                                    <span class="pull-right">100%</span>
                                    <div class="progress" style="margin-bottom: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0" style="text-align: justify;appearance: auto;">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Who Am I </h5>
                                    </div>
                                    <p class="lead"
                                        style="line-height: initial;text-align: justify;appearance: auto;">
                                        gdfdfdfdfdf
                                        .</p>
                                    <p class="lead"
                                        style="line-height: initial;text-align: justify;appearance: auto;">
                                       ghdfghftjhf
                                    </p>
                                    <p class="lead"
                                        style="line-height: initial;text-align: justify;appearance: auto;">
                                        thdthdrh
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                <div class="about-img" style="margin:0px">
                                    <img src="img/sun.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" class="img-fluid rounded b-shadow-a"
                                        alt="" style="border-width: 1; border-style: ridge;">
                                </div>
                            </h3>
                            <p class="subtitle-a" style="padding-bottom: 10px;">
                                Sun Certified Java Programmer since 2002</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            SOME OF THE EXPERIENCES THAT I HAVE </h3>
                        <p class="subtitle-a">
                            These are some of the projects I can do </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box" style="min-height: 390px; display: grid;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-aperture"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">WEBS APP</h2>
                            <p class="s-description text-center" style="text-align: justify;appearance: auto;">
                                The project is made using bootstrap, html5, CSS3 and jQuery in terms of external design,
                                and the site is programmed by PHP (LARAVEL FRAMEWORK) and MySql databases</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" style="min-height: 390px; display: grid;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-code-working"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">DESKTOP APP</h2>
                            <p class="s-description text-center" style="text-align: justify;appearance: auto;">
                                The project is made using C# on Visual Studio or Jetbrain Rider with Microsoft Access,
                                SQL Server or MySQL databases</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" style="min-height: 390px; display: grid;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-ios-list"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">MOBILE APP</h2>
                            <p class="s-description text-center" style="text-align: justify;appearance: auto;">
                                The project is made using JAVA or KOTLIN on Android Studio and SQLite databases <br />
                                <br /> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->
    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            SOME OF THE PROJECTS I HAVE COMPLETED </h3>
                        <p class="subtitle-a">
                            This is some projects completed during 2019 </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="direction: ltr;">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-1.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-1.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Wasali website</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project based on
                                                delivering the required meals to customers via the Internet in exchange
                                                for an amount of money</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">School Management project</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project that runs
                                                a private preparatory school from the beginning of the year, from
                                                registering students to the end of the year and showing the
                                                results</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-3.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-3.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Orient Pearl website</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project that
                                                manages a tourist facility that relies on selling cards that contain
                                                credits to enter those sections and book online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-4.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-4.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Abilee website</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project that
                                                transfers balance to customers by selling prepaid cards with balances.
                                                The customer can transfer the required quantities until the card balance
                                                runs out</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-5.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-5.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Interactive book reading project</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project to read
                                                electronic books online, pdf or word with the ability to upload my books
                                                and invite other readers to read and comment on my book</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-6.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-6.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Personal website</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a project that
                                                displays personal information about the owner of the site in terms of
                                                his CV, the projects he presented in his life, and information about
                                                contacting him in a beautiful way</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-7.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-7.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Central Library Repository Management Software</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a warehouse
                                                management program for supplies at the University of Aleppo affiliated
                                                to the Central Library, and it is a special program for organizing the
                                                inputs and outputs of the warehouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-8.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-8.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Lawyers Case Management program</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a program for
                                                lawyers that manages their own cases with the ability to organize their
                                                dates, organize the payments of each case separately, and set the dates
                                                and organization of the sessions of each case</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-9.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-9.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="min-height: 185px; display: grid;">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="w-title">Dental Patient Management Software</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"
                                                style="text-align: justify;appearance: auto;">It is a program for the
                                                management of dentist patients, which is based on keeping the file of
                                                each patient with the organization of appointments throughout the week
                                                for patients while keeping the diagnosis for each patient</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->
    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            SOME OF THE COURSES THAT I GIVE </h3>
                        <p class="subtitle-a">
                            these are some of the courses that I give and a large number of students have graduated,
                            thank God</p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <img src="img/post-1.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category" style="margin-top: 10px;">WEB APP COURSE</h6>
                                </div>
                            </div>
                            <p class="card-description"
                                style="text-align: justify;appearance: auto; min-height: 140px;  display: grid;"> <br />
                                This course includes learning the PHP Language as server side, HTML5 - CSS3 - jQuery -
                                BootStrap as client side, and MySQL databases with Laravel Faramework or without it</p>
                        </div>
                        <div class="card-footer text-left">
                            <div class="post-author">
                                <a href="#"> <img src="img/testimonial-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                                        class="avatar rounded-circle"> <span class="author">this course will
                                        need</span> </a>
                            </div>
                            <div class="post-date">
                                30
                                <span class="ion-ios-clock-outline"></span> session
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <img src="img/post-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category" style="margin-top: 10px;">DESKTOP APP COURSE </h6>
                                </div>
                            </div>
                            <p class="card-description"
                                style="text-align: justify;appearance: auto; min-height: 140px;  display: grid;"> <br />
                                This course includes learning the C# language on Visual Studio or Jetbrain Rider with
                                learning Microsoft Access or SQL Server databases </p>
                        </div>
                        <div class="card-footer text-left">
                            <div class="post-author">
                                <a href="#"> <img src="img/testimonial-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                                        class="avatar rounded-circle"> <span class="author">this course will
                                        need</span> </a>
                            </div>
                            <div class="post-date">
                                30
                                <span class="ion-ios-clock-outline"></span> session
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <img src="img/post-3.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category" style="margin-top: 10px;">ANDROID APP COURSE </h6>
                                </div>
                            </div>
                            <p class="card-description"
                                style="text-align: justify;appearance: auto; min-height: 140px;  display: grid;"> <br />
                                This course includes learning the JAVA OR KOTLIN language, which forms the basis of
                                programming on Android on Android Studio with SQLite databases</p>
                        </div>
                        <div class="card-footer text-left">
                            <div class="post-author">
                                <a href="#"> <img src="img/testimonial-2.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                                        class="avatar rounded-circle"> <span class="author">this course will
                                        need</span> </a>
                            </div>
                            <div class="post-date">
                                30
                                <span class="ion-ios-clock-outline"></span> session
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Blog End /-->
    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url('img/intro-bg.jpg');background-position: center;">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2" style="text-align: justify;appearance: auto;">
                                        <h5 class="title-left">
                                            Send A Message </h5>
                                    </div>
                                    <div>
                                        <form action="{{ route('store.messge') }}" method="post" role="form" class="contactForm">
                                            @csrf
                                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage">There is somthing wrong. plase try again!</div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Your Name" data-rule="minlen:4"
                                                            data-msg="Please enter at least 4 chars" dir="rtl" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Your Email" data-rule="email"
                                                            data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject" data-rule="minlen:4"
                                                            data-msg="Please enter at least 8 chars of subject"
                                                            dir="rtl" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            data-rule="required"
                                                            data-msg="Please write something for Me"
                                                            placeholder="Message" dir="rtl"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0"
                                        style="text-align: justify;appearance: auto;">
                                        <h5 class="title-left">
                                            Contact Info </h5>
                                    </div>
                                    <div class="more-info">
                                        <div class="container" style="direction: ltr;">
                                            <div class="input-group">
                                                <span id="copyButton" class="input-group-addon btn"
                                                    title="Click to copy"> <i class="fa fa-clipboard"
                                                        aria-hidden="true"></i> </span>
                                                <input type="text" id="copyTarget" class="form-control"
                                                    value="mhmaadkamel@gmail.com">
                                                <span class="copied">Copied!!!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-info">
                                        <div class="container" style="direction: ltr;">
                                            <div class="input-group">
                                                <span id="copyButton1" class="input-group-addon btn"
                                                    title="Click to copy"> <i class="fa fa-clipboard"
                                                        aria-hidden="true"></i> </span>
                                                <input type="text" id="copyTarget1" class="form-control"
                                                    value="mhamadkamel@hotmail.com">
                                                <span class="copied1">Copied!!!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-info">
                                        <div class="container" style="direction: ltr;">
                                            <div class="input-group">
                                                <span id="copyButton2" class="input-group-addon btn"
                                                    title="Click to copy"> <i class="fa fa-whatsapp"
                                                        aria-hidden="true"></i> </span>
                                                <input type="text" id="copyTarget2" class="form-control"
                                                    value="+963933656429">
                                                <span class="copied2">Copied!!!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-info text-center" style="margin: 20px;">
                                        <div class="row">
                                            <div class="col-6" style="padding: 5px;">
                                                <a href="https://github.com/mkamel44" target="_blank"> <i
                                                        class="fa fa-4x fa-github"><span
                                                            style="font-size:20px;display: block;">GitHub</span></i>
                                                </a>
                                            </div>
                                            <div class="col-6" style="padding: 5px;">
                                                <a href="https://www.linkedin.com/in/mhamad-kamel-36bb2918b/"
                                                    target="_blank"> <i class="fa fa-4x fa-linkedin-square"><span
                                                            style="font-size:20px;display: block;">LinkedIn</span></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6" style="padding: 5px;">
                                                <a href="https://www.facebook.com/kamel.prog.5" target="_blank"> <i
                                                        class="fa fa-4x fa-facebook-square"><span
                                                            style="font-size:20px;display: block;">FaceBook</span></i>
                                                </a>
                                            </div>
                                            <div class="col-6" style="padding: 5px;">
                                                <a href="https://twitter.com/Mkamel74073144" target="_blank"> <i
                                                        class="fa fa-4x fa-twitter-square"><span
                                                            style="font-size:20px;display: block;">Twitter</span></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p>&copy; Copyright <img src="img/favicon.png?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                                class="img-fluid" style="width: auto; height: 40px ;"> All Rights Reserved
                            <script>
                                document.write(new Date().getFullYear())
                            </script></p>
                        <div class="credits">Designed by <a href=""><strong>M Kamel</strong>.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Section Contact-footer End /-->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>
