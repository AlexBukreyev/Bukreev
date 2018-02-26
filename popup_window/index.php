<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- icon element on the screen-->
    <div class="show_popup blue-circle" rel="popup1">
        <i class="fa  fa-envelope-o envelope" aria-hidden="true"></i>
        <i class="fa fa-times close" aria-hidden="true"></i>
    </div>

<div class="overlay_popup"></div>

<!-- popup element -->
<div class="popup" id="popup1">
    <div class="object">
        <h1 id="messages"></h1>
        <div id="text"></div>
    </div>
</div>

<script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script src="script.js"></script>

</body>
</html>
