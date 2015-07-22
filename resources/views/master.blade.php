<!DOCTYPE html>
<html lang="no">
<head>
    <title>Sosiogram - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sosiogram.css">
</head>
<body>

<div class="container">
    <div class="navbar navbar-default">
        <a href="/home">
            <img src="/images/logo.png" alt="logo" class="navbar-left" style="width: 80px">
            <h1 class="navbar-left">Sosiogram</h1>
        </a>

        <div class="navbar-right">
            {{ Auth::user()->name }}<br/>
            <a href="/auth/logout">Logg ut</a>
        </div>
    </div>
    @yield('content')
</div>

</body>
</html>