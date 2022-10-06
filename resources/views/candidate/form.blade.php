@extends('party.layout.master')

@section('content')

<div class="mx-[27rem] px-10 mt-10 pt-10 rounded border-gray-400 border">
    <div class="pb-6 text-center text-3xl">
        Nomination Form
    </div>
    <div class="bg-slate-100 px-7 py-5">
        @if(Session::has('message'))
        <div class="text-green-500">
            {{ Session::get('message') }}
            @php
                Session::forget('message');
            @endphp
        </div>
        @endif
        @if(Session::has('Errormessage'))
        <div class="text-red-700">
            {{ Session::get('Errormessage') }}
            @php
                Session::forget('Errormessage');
            @endphp
        </div>
        @endif
        <form action="{{ route('formsubmit') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            <label for="name">Name</label> <br>
            <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" 
            type="text" name="name" value="{{ old('name') }}"> <br>
            @if ($errors->has('name'))
                <span class="text-red-700">* {{ $errors->first('name') }}</span><br>
            @endif
            <label for="mobile">Mobile No</label> <br>
            <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="text" name="mobile" value="{{ old('mobile') }}"><br>
            @if ($errors->has('mobile'))
                <span class="text-red-700">* {{ $errors->first('mobile') }}</span><br>
            @endif 
            <label for="email">Email</label> <br>
            <input class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" type="email" name="email" value="{{ old('email') }}"> <br>
            @if ($errors->has('name'))
                <span class="text-red-700">* {{ $errors->first('email') }}</span><br>
            @endif 
            <label for="deptname">Department Name</label>
            <select type="" name="deptname" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300">
                <option value="CSE">CSE</option>
                <option value="ME">ME</option>
            </select>  <br>
            <label for="regno">Registration No</label> <br>
            <input type="text" name="regno" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" value="{{ old('regno') }}"><br>
            @if ($errors->has('regno'))
                <span class="text-red-700">* {{ $errors->first('regno') }}</span><br>
            @endif 
            <label for="party">Party</label><br>
            <input type="text" name="party" value="{{ Auth::guard('party')->user()->name }}" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300" readonly> <br>
            <label for="position">Position</label> <br>
            <select type="" name="position" class="w-full focus:border-blue-100 border-gray-400 rounded-md hover:border-blue-300">
                <option value="President">President</option>
                <option value="General Secratery">General Secratery</option>
                <option value="Assistant General Secratery">Assistant General Secratery</option>
            </select>  <br>
            <label for="gender" >Gender</label>
            Male:<input type="radio" name="gender" value="Male" checked>
            Female:<input type="radio" name="gender" value="Female">
            <br> <br>
            <div class="relative">
                <button class="inline-block">Upload your Document</button> <br>
                <input type="file" name="document" class="absolute text-xs" ><br>
                <span class="text-blue-600 text-sm"><a href="#">Click here</a></span><span class="text-red-600 text-sm">* Instruction of documents to be upload </span>
            </div>
            @if ($errors->has('document'))
                <span class="text-red-700">* {{ $errors->first('document') }}</span><br>
            @endif 
            
            
            <label for="image">Upload Your Image</label> <br>
            <input type="file" name="image" class="text-xs"> <br> 
            @if ($errors->has('image'))
                <span class="text-red-700">* {{ $errors->first('image') }}</span><br>
            @endif
            <label for="signature">Upload Your Signature</label> <br>
            <input type="file" name="signature" class="text-xs"> <br><br>
            @if ($errors->has('signature'))
                <span class="text-red-700">* {{ $errors->first('signature') }}</span><br>
            @endif
            <button class="bg-red-600 px-4 py-3 rounded-md text-white hover:bg-red-700 hover:border-blue-300" type="submit" name="submit"> File Nomination </button>
        </form>
    </div>
</div>

@endsection