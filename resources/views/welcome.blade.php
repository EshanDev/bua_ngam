<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Bua-ngam site</title>
        <link rel="shortcut icon" href="{{ asset('images/favicons/favicon-32x32.png') }}" ; type="image/x-icon">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/landing.css') }}">
    </head>

    <body id="landing_page">
        <div class="ui">
            <div class="landing">
                <div class="login-header">
                    <h1 class="text-center">ลงชื่อเข้าใช้งาน</h1>
                </div>
                <div class="login-container">
                    <div class="left-side">
                        <div class="landing-login">
                            <img src="{{ asset('images/ui/landing_login.png') }}" alt="" class="img-fluid landing-image-login">
                        </div>
                    </div>
                    <div class="right-side">
                       <div class="form-login">
                           <form class="login-form">
                               <div class="form-group">
                                   <label for="username">Username :</label>
                                   <input type="text" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label for="password">Password :</label>
                                   <input type="password" class="form-control">
                               </div>
                               <div class="from-group text-center" >
                                   <input style="width: 100%" type="submit" class="btn btn-primary" value="Login">
                               </div>
                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
