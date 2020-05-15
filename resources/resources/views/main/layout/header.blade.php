<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->
<head>
    <meta charset="utf-8" />
    <title>Women Job Center - {{$PageTitle ?? ''}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Women Job Center" />
    <meta name="keywords" content="Women Job Center" />
    <meta name="author" content="Alkarnak" />
    <meta name="MobileOptimized" content="320" />
    @auth
    <meta name="user_id" content="{{auth()->user()->id}}">
    @endauth
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/fonts.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/reset.css" />
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
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/style-ar.css" />
    @else
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/style.css" />
    @endif
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{url('public/main/images/')}}/favicon.png" />
</head>
