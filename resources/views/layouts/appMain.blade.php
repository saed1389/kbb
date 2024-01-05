<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <title>KBB - Admin panel - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>
<body data-bvite="theme-CeruleanBlue" class="layout-border svgstroke-a layout-default auth">
<main class="container-fluid px-0">

    @yield('content')
    <footer class="px-xl-5 px-4">
        <p class="mb-0 text-muted">© {{ date('Y') }} , Tüm Hakları Saklıdır.</p>
    </footer>
</main>
</body>
</html>
