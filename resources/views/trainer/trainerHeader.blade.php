<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./img/logo.png"/>
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIMGYM</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/Paymentstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"      type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css"   type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css"     type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css"       type="text/css">
    <link rel="stylesheet" href="css/style.css"              type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <style>
      .website_checklist ul {
        list-style: none!important; /* Remove the list style */
        padding: 15px 0 0 0!important
      }

      .website_checklist ul label {
        font-size: 16px;
        line-height: 1.4;
        padding: 13px 24px 13px 64px;
        display: block;
        position: relative;
        z-index: 100;
        cursor: pointer
      }

      .website_checklist ul input,
      .website_checklist ul li.focus:before {
        left: 0;
        top: 0;
        position: absolute
      }

      .website_checklist li {
        position: relative
      }

      .website_checklist ul li.focus:before {
        left: 0;
        top: 0;
        position: absolute
      }

      .website_checklist ul input {
        opacity: 0
      }

      .website_checklist ul li.focus:before,
      .website_checklist ul span.input:before {
        content: ""
      }

      .website_checklist ul span.input {
        background-image: -webkit-gradient(linear, left top, right top, from(#eb3c5a), to(#f67831)), -webkit-gradient(linear, left top, right top, from(#eb3c5a), to(#f67831));
      	background-image: -o-linear-gradient(left, #eb3c5a 0%, #f67831 100%), -o-linear-gradient(left, #eb3c5a 0%, #f67831 100%);
      	background-image: linear-gradient(to right, #eb3c5a 0%, #f67831 100%), linear-gradient(to right, #eb3c5a 0%, #f67831 100%);
      	-webkit-transition-duration: 1000ms;
      	-o-transition-duration: 1000ms;
      	transition-duration: 1000ms;
        width: 26px;
        height: 26px;
        left: 24px;
        top: 10px
      }

      .website_checklist ul span.input:before {
        width: 22px;
        height: 22px;
        top: 2px;
        left: 2px
      }

      .website_checklist ul span,
      .website_checklist ul span:after,
      .website_checklist ul span:before {
        display: block;
        position: absolute;
        background: #fff;
        border-radius: 50%
      }

      .website_checklist ul li.checked span.input { /* CSS to make the background green when checked - we add the class checked using javascript */
        background: #cc2333;
      }

      .website_checklist ul li.checked span.input:before {
        background: #cc2333;
      }

      .website_checklist ul li.checked label { /* when checked, make the text have a line through */
        text-decoration: line-through
      }

      .website_checklist ul li.checked.focus:before {
        background: #888
      }

      .website_checklist ul li.focus {
        background: #fafafa
      }

      .website_checklist ul li.checked {
        background: #f1f1f1
      }
    </style>
</head>
<body>
<header >
<div><div class="nav-menu" style="background-color: black;width: 100%;margin: 0px;padding: 0px "><div class="logo">
                    <a href="home"><img src="./img/TIMGYM2.png" style="width: 210px;height: 79px;margin: -21px;" alt="TIM GYM"></a>
</div><nav class="mainmenu mobile-menu" style="float: right">
            <ul>
                                       <li><a href="take_attendance">Attendance</a></li>
                               <li><a href="trainer"><i class="fa fa-user"></i> Welcome .....</a></li>
                        <li class="nav-item"><a href="logout" class="nav-link"><i class="fa fa-user-times"></i> Logout</a>
            </ul>
    </nav>
</div></div></header>