<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>涛涛后台登录平台</title>
</head>
<!--css-->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/admin/login.css">
<link rel="stylesheet" href="css/bootstrap.css">
<!--END css-->
<body>
<div id="login">
    <login></login>
</div>
</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
