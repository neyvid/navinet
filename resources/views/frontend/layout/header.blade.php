<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>
        @yield('page_title')
    </title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend.css')}}" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    <!-- CSS Part End-->
</head>

<body>
<div class="wrapper-wide">
    <div id="header">
        @include('frontend.layout.topheader')
        @include('frontend.layout.middleheader')
        @include('frontend.layout.topmenu')


    </div>