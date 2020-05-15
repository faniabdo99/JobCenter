<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->
<head>
    <meta charset="utf-8" />
    <title>Admin Panel - {{$PageTitle ?? ''}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="JB desks,job portal,job" />
    <meta name="keywords" content="JB desks,job portal,job" />
    <meta name="author" content="Semicolon Group" />
    <meta name="MobileOptimized" content="320" />
    @auth
    <meta name="user_id" content="{{auth()->user()->id}}">
    @endauth
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/fonts.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('public/main/css/')}}/font-awesome.css" />
    <link rel="stylesheet" href="{{url('public/admin/css/')}}/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/admin/css/')}}/admin.css" />
    <link rel="stylesheet" href="{{url('public/admin/css')}}/dropzone.css">
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>
