<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OVS PARTY PANEL</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class=" px-7 bg-gray-200 py-6 shadow-md sticky top-0">
        <div class="flex justify-between ">
            <div>
                <a href="{{ route('party.dashboard') }}">Welcome, {{ Auth::guard('party')->user()->name }}</a>
            </div>
            <div>
                <div class="space-x-3">
                    <a href="{{ route('party.dashboard') }}">Home</a>
                    <a href="{{ route('nominationform') }}">Nomination</a>
                    <a href="{{ route('party.logout') }}">Logout</a>
                </div>
            </div>
        </div>
        
    </nav>
    <main>
        @yield('content')
    </main>

</div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>
    
