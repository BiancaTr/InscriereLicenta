<!DOCTYPE html>
<html lang="en">
<head>
    <title>UAIC licenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/label-input.css') }}" type="text/css">
</head>
<body>

<div id="header">
    <div class="logo"><a href="#"><img src="image/logo-university.png" alt="Logo-license"></a></div>
    <div class="header-right">
        <a class="button" onclick="document.getElementById('login').style.display='block'">Login</a>
        <a class="button" href="register">Register</a>
    </div>  
</div>

<div id="login" class="box">
    <form class="box-content animate">
        <div class="container-login">
            <div class="content-login">
                <h1 align="center">Register</h1>
                <hr>
            </div>
            <div class="form">
                <input type="text" name="username" placeholder="" autocomplete="off" required/>
                <label class="label">
                    <span class="content-span">Username</span>
                </label>
            </div>
            <div class="form">
                <input type="password" name="password" placeholder="" autocomplete="off" required/>
                <label class="label">
                    <span class="content-span">Password</span>
                </label>
            </div>
            <span class="forgot-pass"><a href="#">Forgot password?</a></span>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        <div class="register_using">
            <span>Or Register Using</span>
            <span><a href="register">REGISTER</a></span>
        </div>
    </form>
</div>
<div id="main" class="main">
    <div id="main-content" class="main-content">
        <div class="main-title">
            <h2>Inscriere pentru examenul de finalizare a studiilor de licenta</h2>
            <hr>
        </div>

        <div class="comisie">
            <h3>Rezultate examenului de finalizare</h3>
            <hr>
            <div class="comisie-rezultate">
                <a href="#">Comisie 1</a>
                <a href="#">Comisie 2</a>
                <a href="#">Comisie 3</a>
                <a href="#">Comisie 4</a>
            </div>

        </div>
    </div>
</div>


<script src="javascript/login-box.js"></script>


</body>
</html>
