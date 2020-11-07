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
    <div class="p-5 lg:p-10 h-screen lg:flex relative">
        <div class="w-full lg:w-1/2 m-auto lg:p-10 lg:flex">
            <div class="w-full lg:w-1/2">
                <img class="mb-4" src="{{asset('images/diulogoside.png')}}" alt="" width="180">
                <img class="relative" width="350" src="{{asset('images/undraw_book_lover_mkck.svg')}}" alt="">
            </div>
            <div class="bg-white w-full lg:w-1/2 p-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-6">
                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                            placeholder="Enter your email" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                            placeholder="********" required>
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <a href="/" class="text-blue-500 hover:underline cursor-pointer">Forgotten Password ?</a>
                </div>
                <hr class="my-3">

                <div class="mb-6 flex block">
                    <a class="text-center mx-auto w-full lg:w-1/2 bg-green-400 text-white rounded py-2 hover:bg-green-500 cursor-pointer"
                        onclick="document.querySelector('#modal-register').classList.remove('hidden');document.querySelector('#modal-register').classList.add('fixed');">
                        Create New Account
                    </a>
                </div>

            </div>
        </div>
    </div>
    @include('register')
    <script src="{{asset("js/app.js")}}"></script>
</body>

</html>