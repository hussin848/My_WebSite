<!DOCTYPE html>
<html lang="ar" style="direction: rtl;">

<head>
    <meta charset="utf-8">
    <title>المبرمج حسين الدالي</title>
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

        link.href = "css_ar/" + items[Math.floor(Math.random() * items.length)];

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
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="direction: ltr;">
        <div class="container">
            <a href="" class="navbar-brand"><img src="img/favicon.png?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid lolo"
                    style="width: auto; height: 80px ;"></a>
            <a class="nav-link" target="_blank" href="https://github.com/hussin848"
                style="padding-left: 5px; padding-right: 5px; padding-bottom: 10px; padding-top: 10px;contain: paint;display: inline-grid;justify-items: flex-end;"><i
                    class="fa fa-2x fa-github" style="margin-inline: auto;"></i><span
                    style="font-size: xx-small;">GitHub</span></a>
            <a class="nav-link" target="_blank" href="https://www.linkedin.com/in/hussein-al-daly-a59698101/"
                style="padding-left: 6px; padding-right: 6px; padding-bottom: 10px; padding-top: 10px;contain: paint;display: inline-grid;justify-items: flex-end;"><i
                    class="fa fa-2x fa-linkedin-square" style="margin-inline: auto;"></i><span
                    style="font-size: xx-small;">LinkedIn</span></a>
            <a class="nav-link" href="{{ url('/en') }}" ~
                style="padding-left: 0px; padding-right: 0px; padding-bottom: 10px; padding-top: 10px;contain: paint;display: inline-grid;justify-items: flex-end;margin:10px"><img
                    src="img/en.png" alt="" class="img-fluid"
                    style="width: 32px; height: 20px ;border-style: solid; border-width: thin;margin: 6px;margin-left: 2px; margin-right: 2px; justify-self: center;max-width: fit-content;"><span
                    style="font-size: xx-small; margin-inline: auto;">English</span></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarDefault" style="direction: rtl;">
                <ul class="navbar-nav" style="padding: unset;">
                    <li class="nav-item" style="align-self: self-start;">
                        <a class="nav-link js-scroll active" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;">
                        <a class="nav-link js-scroll" href="#about">لــمـحـة</a>
                    </li>

                    <li class="nav-item" style="align-self: self-start;">
                        <a class="nav-link js-scroll" href="#work">مشاريع</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;">
                        <a class="nav-link js-scroll" href="#service">خبرات</a>
                    </li>
                    <li class="nav-item" style="align-self: self-start;">
                        <a class="nav-link js-scroll" href="#contact">اتـصـل</a>
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
                    <!-- <h1 class="intro-title mb-4">المبرمج حسين الدالي </h1>  -->
                    <p class="intro-subtitle"><span class="text-slider-items">المبرمج حسين الدالي,Full Stack Developer,مطور للمشاريع,مصمم مواقع,مبرمج تطبيقات للوندوز,مصمم تطبيقات للموبايل</span><strong
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
                            لمحة عن حياتي </h3>
                        <p class="subtitle-a">
                            لمحة مختصرة عن سيرة حياتي المهنية الخصها في بضع كلمات </p>
                        <div class="line-mf"></div>
                    </div>
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row" style="direction: ltr;">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="img/85208905.png?<?php echo date(' Y-m-d H:i:s '); ?>"
                                                class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p style="text-align: right"><span class="title-s">الاسم : </span>
                                                <span>حسين الدالي</span>
                                            </p>
                                            <p style="text-align: right"><span class="title-s">المهنة : </span>
                                                <span> مبرمج ومصمم مواقع و تطبيقات</span>
                                            </p>
                                            <p style="text-align: right"><span class="title-s">العمر : </span>
                                                <script>
                                                    document.write(calculate_age(new Date(1996, 3, 1)));
                                                </script> سنة</span> </p>
                                            <p style="text-align: right"><span class="title-s">الحالة الاجتماعية
                                                    : </span> <span>اعزب</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s" style="text-align:justify;">الخبرات</p>
                                    <span>HTML5 - CSS3 - jQuery - Bootstrap</span>
                                    <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP Laravel FrameWork
                                    </span>
                                    <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>C# MVC</span>
                                    <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>




                                    <span>Flutter Dart Language</span>
                                    <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>MVC (Model - View - Controller )<br />Design Pattern For Any Project</span>
                                    <span class="pull-right">100%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0" style="text-align:justify;">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            من أنا </h5>
                                    </div>
                                    <p class="lead" style="line-height: revert;">
                                        أنا من مدينة حلب في سوريا درست الاعدادية والثنوية في مدرسة محمد علوش المحمد
                                        وتخرجت منه .</p>
                                    <p class="lead" style="line-height: revert;">
                                        بدات الحياة المهنية في عام 2014 في تركيا ثم بدات بدراسة البرمجة من الانترنيت
                                        واليوتيوب
                                        ومنصةudemy ومنصات اخرى وحصلة على عدة شهادات منها
                                        . </p>
                                    <p class="lead" style="line-height: revert;">
                                        قمت بتصمم عدة مواقع تجارة الكترونية وادارة محتوى وبرامج ادارة مبيعات
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
                            بعض الخبرات التي أمتلكها </h3>
                        <p class="subtitle-a">
                            هذه بعض المشاريع التي أستطيع القيام بها </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box" style="height: 450px;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-aperture"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">تصميم المواقع على الانترنت</h2>
                            <p class="s-description text-center">
                                يتم عمل المشروع بتقنية bootstrap و html5 و CSS3 و jQuery من حيث التصميم الخارجي و يتم
                                برمجة الموقع عن طريق PHP (LARAVEL FRAMEWORK) و قواعد البيانات MySql </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" style="height: 450px;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-code-working"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">تصميم البرامج على الوندوز</h2>
                            <p class="s-description text-center">
                                يتم عمل البرامج بلغة #C على برنامج Visual Studio أو Jetbrain Rider مع قواعد البيانات
                                Microsoft Access أو SQL Server أو MySQL </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" style="height: 450px;">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-ios-list"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">تصميم البرامج للموبايل</h2>
                            <p class="s-description text-center">
                                يتم عمل البرامج بلغة البرمجة JAVA أو KOTLIN على برنامج Android Studio وقواعد بيانات
                                SQLite <br /> <br /> </p>
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
                            بعض المشاريع التي أنجزتها </h3>
                        <p class="subtitle-a">
                            هذه لمحة عن المشاريع التي تم إنجازها خلال عام 2019 </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="img/work-1.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/work-1.jpg?<?php echo date(' Y-m-d H:i:s '); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">موقع وصّلّي</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع يقوم على توصيل
                                                الوجبات الغذائية المطلوبة للزبائن عن طريق الانترنت مقابل مبلغ من
                                                المال</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">مشروع إدارة مدرسة</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع يقوم بإدارة مدرسة
                                                إعدادية خاصة من بداية العام من تسجيل الطلاب الى نهاية العام وإظهار
                                                النتائج</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">موقع لؤلؤة الشرق</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع يقوم بإدارة منشأة
                                                سياحية والتي تعتمد على بيع بطاقات تحتوي أرصدة للدخول الى تلك الأقسام
                                                والحجز اولاين</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">موقع عبيلي</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع يقوم بتحويل رصيد
                                                للزبائن عن طريق بيع بطاقات مسبقة الدفع لها أرصدة يستطيع الزبون تحويل
                                                الكميات المطلوبة حتى نفاذ رصيد البطاقة </span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">مشروع قراءة الكتب التفاعلية</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع قراءة الكتب
                                                الالكترونية اونلاين أو pdf أو word مع إمكانية رفع الكتب الخاصة بي ودعوة
                                                قراء آخرين لقراءة كتابي و التعليق عليه</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">مواقع شخصية</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory justify-content-end">وهو مشروع يقوم بعرض معلومات
                                                شخصية عن مالك الموقع من حيث السي في الخاصة به و المشاريع التي قدمها في
                                                حياته ومعلومات تخص الاتصال به بطريقة جميلة</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">برنامج إدارة مستودعات اللوازم </h2>
                                        <div class="w-more">
                                            <span class="w-ctegory" style="text-align:justify;">وهو برنامج إدارة
                                                مستودع اللوازم في جامعة حلب التابع للمكتبة المركزية وهو برنامج خاص
                                                لتنظيم المدخلات والمخرجات للمستودع</span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">برنامج إدارة قضايا المحامين </h2>
                                        <div class="w-more">
                                            <span class="w-ctegory" style="text-align:justify;">وهو برنامج
                                                للمحامين يقوم بإدارة القضايا الخاصة به مع إمكانية تنظيم مواعيديها وتنظيم
                                                دفعات كل قضية على حدا وتحديد مواعيد جلسات كل قضية وتنظيمها </span>
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
                            <div class="work-content" style="height: 185px;">
                                <div class="row text-right">
                                    <div class="col">
                                        <h2 class="w-title">برنامج إدارة مرضى طبيب الأسنان</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory" style="text-align:justify;">وهو برنامج لإدارة
                                                مرضى طبيب الأسنان والذي يقوم على حفظ إضبارة كل مريض مع تنظيم المواعيد
                                                على مدار الأسبوع للمرضى مع حفظ التشخيص لكل مريض</span>
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
                                    <div class="title-box-2" style="text-align: justify;">
                                        <h5 class="title-left">
                                            أرسل إلي رسالة </h5>
                                    </div>
                                    <div>



                                        <form action="{{ route('store.messge') }}" method="HEAD" role="form" class="contactForm">
                                            @csrf
                                            <div id="sendmessage">تم ارسال الرسالة بنجاح</div>
                                            <div id="errormessage">هناك خطأ غير متوقع الرجاء اعادة المحاولة</div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="الاسم" data-rule="minlen:4"
                                                            data-msg="الرجاء التأكد من الاسم ان لا يقل عن 4 أحرف" />
                                                        <div class="validation" style="float: right;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control inputs-nyn"
                                                            name="email" id="email" placeholder="البريد الالكتروني"
                                                            data-rule="email"
                                                            data-msg="الرجاء التأكد من البريد الالكتروني"
                                                            style="direction: ltr;" />
                                                        <div class="validation" style="float: right;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="العنوان" data-rule="minlen:4"
                                                            data-msg="الرجاء التأكد من العنوان أن لا قل عن 8 أحرف" />
                                                        <div class="validation" style="float: right;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            data-rule="required" data-msg="الرجاء التأكد من نص الرسالة"
                                                            placeholder="نص الرسالة"></textarea>
                                                        <div class="validation" style="float: right;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded"
                                                        style="float: right;">أرسل</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0" style="text-align:justify;">
                                        <h5 class="title-left">
                                            معلومات الاتصال  </h5>
                                    </div>
                                    <div class="more-info">
                                        <div class="container" style="direction: ltr;">
                                            <div class="input-group">
                                                <span id="copyButton" class="input-group-addon btn"
                                                    title="Click to copy"> <i class="fa fa-clipboard"
                                                        aria-hidden="true"></i> </span>
                                                <input type="text" id="copyTarget" class="form-control"
                                                    value="husseinaldaly1@gmail.com">
                                                <span class="copied">تم النسخ</span>
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
                                                    value="lufe6497@gmail.com">
                                                <span class="copied1">تم النسخ</span>
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
                                                    value="+905051512096">
                                                <span class="copied2">تم النسخ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-info" style="direction: initial;">
                                        <div class="row socials" style="margin: 0px;margin-top: 50px;">
                                            <div class="col-3"><a href="https://github.com/hussin848"
                                                    target="_blank"><span class="ico-circle"
                                                        style="height: 50px; width: 50px;"><i
                                                            class="fa fa-1x fa-github"
                                                            style="margin: 10px;color:#cac8c4"></i></span></a></div>
                                            <div class="col-3"><a
                                                    href="https://www.linkedin.com/in/hussein-al-daly-a59698101/"
                                                    target="_blank"><span class="ico-circle"
                                                        style="height: 50px; width: 50px;"><i
                                                            class="fa fa-1x fa-linkedin-square"
                                                            style="margin: 10px;color:#cac8c4"></i></span></a></div>
                                            <div class="col-3"><a
                                                    href="https://www.facebook.com/profile.php?id=100059546786721"
                                                    target="_blank"><span class="ico-circle"
                                                        style="height: 50px; width: 50px;"><i
                                                            class="fa fa-1x fa-facebook-square"
                                                            style="margin: 10px;color:#cac8c4"></i></span></a></div>
                                            <div class="col-3"><a href="https://twitter.com/8zVFwtWNwp0AB9I"
                                                    target="_blank"><span class="ico-circle"
                                                        style="height: 50px; width: 50px;"><i
                                                            class="fa fa-1x fa-twitter-square"
                                                            style="margin: 10px;color:#cac8c4"></i></span></a></div>
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
    <footer style="direction: ltr;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p>&copy; Copyright <img src="img/favicon.png?<?php echo date(' Y-m-d H:i:s '); ?>" alt=""
                                class="img-fluid" style="width: auto; height: 40px ;"> All Rights Reserved
                            <script>
                                document.write(new Date().getFullYear())
                            </script></p>
                        <div class="credits">Designed by <a href=""><strong>Hussain</strong>.</a>
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
