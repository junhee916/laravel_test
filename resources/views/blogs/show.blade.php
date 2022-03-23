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
                <div class="home-menu-text">Blog Show Page</div>
                <div class="home-menu-text">
                    <a href="{{ route('register') }}">Login</a>
                </div>
            </div>
        </div>
        <div class="home-right-view">
            <div class="content">
                <h1>Create Page</h1>
                <p>Blog Title: {{ $blog->title }}</p>
                <p>Blog Description: {{ $blog->description }}</p>
                <div>
                    @foreach($blog->comments as $comment)
                        <p>{{ $comment->body }}</p>
                    @endforeach
                </div>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}"><br/>
                    <input type="text" name="body" placeholder="write..."><br/>
                    <button>save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>