<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


    <title>My Project</title>

    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background-color: #2b2b2b;
        }
        a {
            background-color: transparent;

            text-decoration: none;
        }
        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }
        svg, video {
            display: block;
            vertical-align: middle
        }
        video {
            max-width: 100%;
            height: auto
        }
        .flex {
            display: flex
        }

        .font-semibold {
            font-weight: 600
        }
        .text-lg {
            font-size: 1.125rem
        }

        .min-h-screen {
            min-height: 85vh;
        }


        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }
    </style>
</head>
<body>
    {{--nav bar--}}
    <nav class=" navbar-expand-lg pad-20" >
        <div style = "display: flex; flex-direction: row; justify-content: center;">
            <ul class="navbar-nav " style="padding: 5px; ">
                <li >
                    <a href="/" class="nav-link" >
                        <i class="fas fa-home fa-2x" style="color: white"></i>
                    </a>
                </li>
                <li >
                    <a href="/posts/create" class="nav-link">
                        <i class="fas fa-plus fa-2x" style="color: white"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{--section--}}
    <main>
        <div >
            @yield('content')
        </div>
    </main>


    {{--footer--}}

</body>
</html>
