<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .home-form{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
        }
        .home-left-menu{
            width: 256px;
            background-color: palegoldenrod;
        }
        .home-right-view{
            width: 2304px;
            background-color: white;
        }
        .home-menu-info{
            color: white;
            font-size: 20px;
            padding: 50px 0 0 30px
        }
        .home-menu-text{
            margin-bottom: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="home-form">
        <div class="home-left-menu">
            <div class="home-menu-info">
                <div class="home-menu-text">
                    <a href="{{ route('register') }}">Login</a>
                </div>
            </div>
        </div>
        <div class="home-right-view">
            <div class="content">

            </div>
        </div>
    </div>
</body>
</html>