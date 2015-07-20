<!DOCTYPE html>
<html>
<head>
    <title>Guido Schmitz - Blog</title>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prism.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="Laravel, Lumen, Coding, Blog, Architecture, PHP">
    <!-- Facebook optimization -->
    <meta property="og:site_name" content="Guido Schmitz - Blog">
    <meta property="og:image" content="{{ asset('images/myself.png  ') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="article">
    <meta property="article:author" content="https://www.facebook.com/guidsen">
    <!-- End of facebook optimization -->
</head>
<body>

<div class="profile-container fluid-container">
    <div class="col-xs-8 col-xs-offset-2">
        @include('_profile')
    </div>
</div>

<div class="col-xs-8 col-xs-offset-2">
    @yield('content')
</div>
<script src="scripts/prism.js" type="text/javascript"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46203743-4', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
