@extends('student.layout.master')

@section('content')
    

<div class="flex justify-between ">
    <div class="w-[65%] bg-slate-400">
        <img src="{{ asset('Upload/vote-registration-application-election-concept_53876-132185.jpg') }}" alt="" srcset="" class="w-full">
    </div>
    <div class="bg-gray-100 px-16 py-5 shadow-sm w-[35%]">
        <div class="text-center">
            <span class="font-medium text-xl">Party Login Here</span>
        </div>
        
                
            
        <div class="mt-7">
            <span class="text-red-600">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </span> <br>
            @if (session()->has('message'))
                <span class="text-green-700"> {{ session()->get('message') }}</span><br>
            @endif 
            <form action="{{ route('party.login') }}" method="post">
                @csrf
                <label for="email">Email</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="email" name="email" > <br>

                <label for="password">Password</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="password" name="password" ><br> <br>

                <button class="bg-red-600 px-4 py-3 rounded-md text-white hover:bg-red-700 hover:border-blue-300" type="submit" name="submit"> LogIn </button>
                
                
            </form>
            <div> <br>
                <hr>
                <br>
                <span>Not Registered?</span> <a class="text-blue-600" href="{{ route('partyregister') }}">Click here</a> <span>to Register</span>
            </div>
        </div>
    </div>
</div>


@endsection