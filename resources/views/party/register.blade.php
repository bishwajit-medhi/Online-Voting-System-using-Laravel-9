@extends('student.layout.master')

@section('content')

<div class="flex justify-between ">
    <div class="w-[65%] bg-slate-400">
        <img src="{{ asset('Upload/vote-registration-application-election-concept_53876-132185.jpg') }}" alt="" srcset="" class="w-full">
    </div>
    
    <div class="bg-gray-100 px-16 py-5 shadow-sm w-[35%]">
        <div class="text-center">
            <span class="font-medium text-xl">Party Register Here</span>
        </div>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        <div class="mt-7">
            <form action="{{ route('party.register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="regid">Party Registration No</label> <br>
                <input type="text" name="regid" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300"> <br>
                <label for="name">Party Name</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="text" name="name"> <br>
                <label for="mobile">Mobile No</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="text" name="mobile" > <br>
                <label for="email">Email</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="email" name="email" > <br>
                
                <label for="password">Password</label> <br>
                <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="password" name="password" ><br> <br>
                <label for="image">Upload Your Party Registration ID</label> <br>
                <input type="file" name="image" class="text-xs"> <br> <br>
                @if ($errors->has('image'))
                    <span class="text-red-700">* {{ $errors->first('image') }}</span><br>
                @endif
                <button class="bg-red-600 px-4 py-3 rounded-md text-white hover:bg-red-700 hover:border-blue-300" type="submit" name="submit"> Register </button>
                
            </form>
            <div> <br>
                <hr>
                <br>
                <span>Registered Already?</span> <a class="text-blue-600" href="{{ route('PartyLogin') }}">Click here</a> <span>to Log In</span>
            </div>
        </div>
    </div>
</div>

@endsection