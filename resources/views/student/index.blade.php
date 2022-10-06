@extends('student.layout.master')


@section('content')
@include('student.layout.banner') 

<div class="bg-blue-800 mx-48 -mt-14 ml-[20rem] absolute rounded-pill">
    <ul class="flex space-x-6 justify-between  text-white font-serif text-md cursor-pointer text-center">
        <li class="hover:bg-blue-900 py-7 px-4 rounded-l-full">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4">Link</li>
        <li class="hover:bg-blue-900 py-7 px-4 rounded-r-full">Link</li>
    </ul>
</div>
<div class="flex pt-14 pl-5 justify-center ">
    <div class=" w-[70%] border drop-shadow-2xl px-6 py-4 mr-4">
        <span class="text-center text-xl font-medium">Online Voting System</span>
        <div>
            <p class="mt-2 text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate minus iusto fugit amet, ratione similique aliquam, totam pariatur veritatis nihil illum odio voluptatem earum ex iure explicabo expedita rerum magnam! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, magnam saepe. Laudantium dicta atque aperiam minima dolorum quod in nostrum molestias, quas accusamus praesentium, explicabo eaque ratione voluptate exercitationem hic. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio voluptatibus doloremque consectetur, ullam accusantium soluta tempora veritatis dolor voluptatum quidem fuga repellendus neque cupiditate enim totam minima eum iure corporis!
            </p>
            
        </div>
    </div>
    <div class="w-[30%] text-center border pt-4 mr-4">
        <div>
            <span class="text-center text-xl font-medium">Notification</span>
            <marquee behavior="scroll" direction="up" scrollamount="3"  class="h-44 mt-4" onmouseover="this.stop();" onmouseout="this.start();"">
                @foreach ($data as $item)
                    <li>{{ $item->notification }}</li>
                @endforeach
            </marquee>
        </div>        
    </div>
</div>



@endsection