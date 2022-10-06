<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OVS ADMIN PANEL</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class=" px-7 bg-gradient-to-b from-gray-300 to-blue-50 py-6 shadow-md sticky top-0">
        <div class="flex justify-between ">
            <div>
                <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
            </div>
            <div>
                <div class="space-x-3 font-semibold">
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                    <a href="{{ route('adminstudent') }}">Student List</a>
                    <a href="{{ route('admincandidate') }}">Candidate List</a>
                    <a href="{{ route('adminparty') }}">Party List</a>
                    <a href="{{ route('notificationview') }}">Message center</a>
                    <a href="{{ route('admin.logout') }}">Logout</a>
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
    
