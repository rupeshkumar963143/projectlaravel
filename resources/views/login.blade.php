<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/log.css')}}">
        <script src="https://kit.fontawesome.com/cee083c330.js" crossorigin="anonymous"></script>
</head>
        
    <body>
        <div class="fullpage">
            <div class="w-100">
                <div class="w-90">
                    <div class="w-45">
                        <img src="assets/image/login-bro.png" alt="" style="width:400px;">
                    </div>
                    <div class="w-45" style="position: relative; margin-left: 86px;">
                    <form action="{{url('/login')}}" method="post">
                        @csrf
                        <div class="part2">
                        <div class="headertext">
                        Hello Admin!
                        </div>
                        <div class="text"><br>
                        Welcome back you've been missed
                        </div>
                        <div class="box"><br>
                            <input type="email" name="email" id="" placeholder="Enter Emailaddress" required></input><br><br>
                            <input type="password" name="password" id="" placeholder="Enter Password"  required></input><br>
                        </div>
                        <div class="recovery">
                        Recovery Password
                        </div>
                        <button type="submit" style=" width: 437px;height: 45px; border: 1px solid #FD6B68; border-radius: 7px;background-color: #FD6B68; color:white;">SIGN IN</button>
                        <div class="contn">
                        Or continue with
                        </div>
                        <div class="aaplelogo">
                            <i class="fa-brands fa-apple fa-2x" style="margin-left: 218px;border: 2px solid #FFFFFF;padding: 6px;margin-top:15px"></i>
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="line">
            
        </div>
    </body>
</html>
