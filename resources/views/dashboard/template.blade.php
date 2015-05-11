<html>
<head>
    <title>Blog Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet" type="text/css">
</head>
<body>

@include('dashboard.navbar')

<div class="wrapper @yield('container-class', 'col-md-8 col-md-offset-2')">
    @yield('content')
</div>

</body>
</html>