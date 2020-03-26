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
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/style.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>
