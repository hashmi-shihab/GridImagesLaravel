<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GridGalleryLaravel</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fileinput.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel='stylesheet' href={{asset('unitegallery/css/unite-gallery.css')}}>


</head>
<body>

<div class="card-header" style="text-align: center;">
    <h1>Welcome To Gallery Grid View Image</h1>
    <h4>I used a plugin here and also tried multiple image CRUD</h4>
    <a class="btn btn-primary" href="{{route('gallery.create')}}">Create Gallery</a>
    <a class="btn btn-success" href="{{route('gallery.index')}}">Gallery Images</a>
    <a class="btn btn-info" href="{{route('gallery.index')}}">View Gallery</a>
</div>

@yield('content')

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/fileinput.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('unitegallery/js/unitegallery.min.js')}}"></script>
<script src="{{asset('unitegallery/themes/tiles/ug-theme-tiles.js')}}"></script>

@yield('jsscript')

</body>

</html>
