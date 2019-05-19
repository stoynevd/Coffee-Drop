<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Coffee Drop </title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link href="/css/noty.css" rel="stylesheet" type="text/css" />
        <script src="/js/noty.min.js"></script>
        {{-- VueJS --}}
        <script src="/js/vue.min.js"></script>
        {{-- Axios --}}
        <script src="/js/axios.min.js"></script>
        <script src="/js/lodash.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/moment.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
