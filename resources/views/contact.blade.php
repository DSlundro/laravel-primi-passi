<!doctype html>
<html lang='en'>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS v5.1.3 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' 
    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <style>
        body{
            background-image: linear-gradient(to right, #fc5c7d, #6a82fb);
        }
        h1{
            text-shadow: 2px 2px white;
        }
        ul{list-style: none}
        li{
            border-bottom: 1px solid cyan; 
            padding-bottom: 5px;
            cursor: pointer;
        }
        a{all: unset}
    </style>
</head>

<body>

    <header class="d-flex justify-content-center pt-3">
        <ul class="d-flex gap-5 fs-1">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about-me')}}">About Me</a></li>
            <li><a href="{{route('library')}}">Library</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </header><hr class="pt-2">

    <main>
        <div class="container pt-5">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1 class="display-1 fw-bold">{{$msg}}</h1>
                </div>
            </div>
        </div>
    </main>

</body>
</html>