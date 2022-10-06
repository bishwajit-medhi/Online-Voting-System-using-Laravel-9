@extends('student.layout.master')

@section('content')
    
<div class="mx-32 mt-3 border-2 p-7 bg-blue-50 shadow-md border-indigo-100">
    <div class="text-center font-bold">
        ELECTION OF STUDENTS UNION IN COLLEGE/INSTITUTION/UNIVERSITY RULES & REGULATIONS, 2022
    </div>
    <div class="text-center font-bold">
        <span>Notification</span> <br>
        <span>Guwahati, the 26th September, 2022</span>
    </div>
    <div>
        <ul>
            <li>
                1. Short title, commencement and applicability(i) These Regulations may be called the Medical Council of India (Election of students union in Medical College/Institution/University) Regulations, 2022. <br>
                (ii) They shall come into force on the date of their publication in the Official Gazette.
            </li>
            <li>
                2.Objective:- <br>
                To conduct peaceful and fair election of students union in Medical College/Institution/University.
            </li>
        </ul>
    </div>
</div>
<div class="text-center mt-5  text-white ">
    <button class="  my-5  focus:bg-red-500 active:border-blue-500"><a href="{{ route('castvote') }}" class="bg-red-600 px-4  py-3 rounded-xl hover:bg-green-600 hover:transition-opacity hover:ease-in-out 0.5 hover:text-red-700   ">Go to Voting Section</a></button>
</div>

@endsection