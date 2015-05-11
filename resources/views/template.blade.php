<html>
<head>
    <title>Laravel</title>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prism.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="profile-container fluid-container">
    <div class="col-md-8 col-md-offset-2">
        @include('_profile')
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    @yield('content')
</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>
