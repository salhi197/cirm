<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('cirm/img/logo2.png')); ?>">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('cirm/style.css')); ?>">


    <title>وسيط الجمهورية</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="<?php echo e(asset('cirm/img/logo.png')); ?>">
        </div>
        <div class="titre1">
            <h1>الجمهورية الجزائرية الديمقراطية الشعبية</h1>
        </div>
        <div class="titre2">
            <h1>وسيط الجمهورية</h1>
        </div>

    </header>
    <!--menu-->
    <nav>
        <label id="icon">
            <i class="fas fa-yin-yang"></i>
        </label>
        <ul>
            <li>
                <a href="<?php echo e(route('register')); ?>">انشاء حساب</a>
            </li>
            <li>
            <a href="<?php echo e(route('register')); ?>">قدم الشكوى</a>
            </li>
            <li>
                <a href="#">متابعة شكوى</a>
            </li>
            <li>
                <a href="#">احصائيات</a>
            </li>
            <li>
                <a href="#">حول البوابة</a>
            </li>
            <li>
                <a class="active" href="index.html">الرئيسية</a>
            </li>
            <li>
        </ul>

        <div class="logo2"><img src="<?php echo e(asset('cirm/img/logo3.png')); ?>"></div>

    </nav>
    <!--Banner-->
    <section class="banner" id="banner">
        <div class="content">
            <h2> ​​​البوابة الإلكترونية للشكاوي والعرائض</h2>
        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col70">
                <p>
                    لقد أنشئ وسيط الجمهورية بموجب المرسوم الرئاسي رقم 20-45 المؤرخ في 21 جمادى الثانية 1441 الموافق ل 15 فبراير 2020 الذي يتضمن وسيط الجمهورية إن وسيط الجمهورية هيئة طعن غير قضائية تساهم في حماية حقوق المواطنين
                </p>
            </div>
            <div class="col30">
                <div class="imgBX">
                    <img src="<?php echo e(asset('cirm/img/tb.jpg')); ?>">
                </div>
            </div>
        </div>

    </section>




</body>

</html>