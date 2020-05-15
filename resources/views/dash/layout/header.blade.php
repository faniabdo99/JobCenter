<!DOCTYPE html>
<html lang="zxx" >
<!--[endif]-->
<head>
    <meta charset="utf-8" />
    <title>Job Center - {{$PageTitle ?? ''}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="JB desks,job portal,job" />
    <meta name="keywords" content="JB desks,job portal,job" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/fonts.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/reset.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css')}}/responsive.css" />
    <link rel="stylesheet" href="{{url('public/admin/css')}}/dropzone.css">
    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165798209-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-165798209-1');
    </script>
    @if(App::getLocale() == 'ar')
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css/')}}/style-ar.css" />
    @else
    <link rel="stylesheet" type="text/css" href="{{url('public/dash/css/')}}/style.css" />
    @endif
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{url('public/main/images/')}}/favicon.png" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{url('public/dash/images')}}/favicon.png" />
</head>
