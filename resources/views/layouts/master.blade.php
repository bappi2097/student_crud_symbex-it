<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Portal | Daffodil International University</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body class="bg-gray-300">
    <x-navbar></x-navbar>
    @yield('content')
    <x-footer></x-footer>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>