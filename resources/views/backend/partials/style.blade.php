<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/quantum/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 12:17:31 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content />
    <meta name="author" content />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('backendAsset') }}/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="{{ asset('backendAsset') }}/assets/css/app.min.css" rel="stylesheet" />
    <link href="{{ asset('backendAsset') }}/assets/css/custom.css" rel="stylesheet" />

    <link href="{{ asset('backendAsset') }}/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
     {{-- datatable start --}}
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
     <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
     @stack('css')
</head>

<body>