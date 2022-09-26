<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/js/bootstrap.min.js.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
    <script src="https://kit.fontawesome.com/b9536fd964.js" crossorigin="anonymous"></script>
    <x-rich-text-trix-styles />
    @vite('resources/js/app.js')
</head>
<body>