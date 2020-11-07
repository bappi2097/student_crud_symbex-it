<nav class="--navbar-color">
    <div class="container mx-auto py-5">
        <div class="flex text-white justify-between items-center">
            <h1 class="text-3xl">DIU</h1>
            <div>
                <ul class="flex justify-between">
                    <li>
                        <a class="border-b border-b-2 border-transparent hover:border-white mx-2" href="/">Home</a>
                    </li>
                    <li>
                        <a class="border-b border-b-2 border-transparent hover:border-white mx-2" href="/">About</a>
                    </li>
                    <li>
                        <a class="border-b border-b-2 border-transparent hover:border-white mx-2" href="/">Contact
                            US</a>
                    </li>
                    <li>
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button class="border-b border-b-2 border-transparent hover:border-white mx-2"
                                href="/">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>