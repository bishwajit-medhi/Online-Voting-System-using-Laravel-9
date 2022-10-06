@extends('student.layout.master')


@section('content')
    

<div class="flex justify-between ">
    <div class="w-[65%] bg-slate-400">
        <img src="{{ asset('Upload/vote-registration-application-election-concept_53876-132185.jpg') }}" alt="" srcset="" class="w-full">
    </div>
    
    <div class="bg-gray-100 px-16 py-5 shadow-sm w-[35%]">
        <div class="text-center">
            <span class="font-medium text-xl">Register Here</span>
        </div>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        <div class="mt-7">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <label for="regno">Registration No</label> <br>
                <input type="text" name="regno" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300"> <br>
                <label for="name">Name</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="text" name="name"> <br>
                <label for="mobile">Mobile No</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="text" name="mobile" > <br>
                <label for="email">Email</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="email" name="email" > <br>
                <label for="deptname">Department Name</label>
                <select type="" name="deptname" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300">
                    <option value="CSE">CSE</option>
                    <option value="ME">ME</option>
                </select> <br> <br>
                <label for="gender" >Gender</label>
                Male:<input type="radio" name="gender" value="Male">
                Female:<input type="radio" name="gender" value="Female">
                <br> <br>
                <label for="password">Password</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="password" name="password" ><br> <br>
                <button class="bg-red-600 px-4 py-3 rounded-md text-white hover:bg-red-700 hover:border-blue-300" type="submit" name="submit"> Register </button>
            </form>
            <div> <br>
                <hr>
                <br>
                <span>Registered Already?</span> <a class="text-blue-600" href="{{ route('login') }}">Click here</a> <span>to Log In</span>
            </div>
        </div>
    </div>
</div>

@endsection