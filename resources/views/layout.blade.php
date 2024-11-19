<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .header ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .header ul li a {
            text-decoration: none
        }

        .footer {
            position: absolute;
            bottom: 0;
            background-color: royalblue;
            width: 100%;
            padding: 5px;
            text-align: center;
        }

        .main{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 50vh;
        }

    </style>
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Content</a></li>
        </ul>
    </div>
    <div class="main">
        @section('main')
        @show

    </div>
    <footer class="footer">
        <p>footer page</p>
    </footer>
</body>

</html>
