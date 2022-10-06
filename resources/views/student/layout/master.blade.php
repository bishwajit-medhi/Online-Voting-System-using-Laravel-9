<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class=" px-7 bg-gradient-to-b from-[#47648f] to-[#abc7e7] py-6 shadow-sm sticky top-0">
    <div class="flex justify-between ">
        <div class="font-semibold text-3xl text-white">
            <a href="/">OVS</a>
        </div>
        <div>
            <div class="space-x-3 text-white text-xl font-medium font-serif">
                @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-red-600 ">Dashboard</a>
                        <a href="{{ url('/logout') }}" class="hover:text-red-600 " >Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-red-600">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-red-600">Register</a>
                        @endif
                    @endauth
            @endif
            </div>
        </div>
    </div>
    
</nav>

<main>
    @yield('content')
</main>


<div class="footer bg-[#172337] mt-2">
    <div class="grid grid-cols-2 md:flex md:justify-between md:px-24 md:py-5 ">
        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                ABOUT
            </div>
            <div class="text-white pt-3 text-xs ">
                <ul class="space-y-2 cursor-pointer">
                    <li class="hover:underline hover:underline-offset-2">Contact Us</li>
                    <li class="hover:underline hover:underline-offset-2">About Us</li>
                    <li class="hover:underline hover:underline-offset-2">Careers</li>
                    <li class="hover:underline hover:underline-offset-2">Stories</li>
                    <li class="hover:underline hover:underline-offset-2">FAQ </li>
                </ul>
            </div>
        </div>

        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                HELP
            </div>
            <div class="text-white pt-3 text-xs ">
                <ul class="space-y-2 cursor-pointer">
                    <li class="hover:underline hover:underline-offset-2">Link</li>
                    <li class="hover:underline hover:underline-offset-2">Link</li>
                    <li class="hover:underline hover:underline-offset-2">Link</li>
                    <li class="hover:underline hover:underline-offset-2">link</li>
                    <li class="hover:underline hover:underline-offset-2">Link</li>

                </ul>
            </div>
        </div>

        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                SOCIAL
            </div>
            <div class="text-white pt-3 text-xs ">
                <ul class="space-y-2 cursor-pointer ">
                    <li class="hover:underline hover:underline-offset-2">Facebook</li>
                    <li class="hover:underline hover:underline-offset-2">Twitter</li>
                    <li class="hover:underline hover:underline-offset-2">YouTube</li>
                    <li class="hover:underline hover:underline-offset-2">Instagram</li>
                    <li class="hover:underline hover:underline-offset-2">Linkedin</li>
                </ul>
            </div>
        </div>

        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                POLICY
            </div>
            <div class="text-white pt-3 text-xs ">
                <ul class="space-y-2 cursor-pointer">
                    <li class="hover:underline hover:underline-offset-2">link</li>
                    <li class="hover:underline hover:underline-offset-2">link</li>
                    <li class="hover:underline hover:underline-offset-2">link</li>
                    <li class="hover:underline hover:underline-offset-2">link</li>
                    <li class="hover:underline hover:underline-offset-2">link</li>
                </ul>
            </div>
        </div>

        <div class="hidden md:block h-52 border border-gray-600 my-5">

        </div>

        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                Mail Us:
            </div>
            <div class="text-white pt-3 text-xs ">
                <span class="">Fake University, <br>

                    Birkuchi <br>

                    Narengi, <br>

                    Guwahati, 781026, <br>

                    Assam, India </span>
            </div>
        </div>

        <div class="m-3">
            <div class="text-[#5c7e7f] text-sm">
                University Address:
            </div>
            <div class="text-white pt-3 text-xs ">
                <span>
                    Fake University, <br>

                    Birkuchi, <br>

                    Narengi, <br>

                    Guwahati, 781026, <br>

                    Assam, India <br>

                    Telephone: 9101352028 <br>
                </span>


            </div>
        </div>
    </div>

    <hr class="mx-10">

    <div class="text-sm md:text-base text-center py-5 text-white">
        <span class="italic">Copyright@</span><span>OVS.com</span>
    </div>
</div>


</div>
</body>

</html>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>






    
