@extends('admin.layout.master')

@section('content')

<div class="mt-3 ">
    <table class="table-auto mx-9">
        <thead>
            <tr>
                <th colspan="5" class="text-center border-2 w-1/2 px-4 py-2">All Party Details</th>
            </tr>
        </thead>
        <thead>
            <tr class="text-center">
                <th class="w-1/4 px-4 py-2">Reg. ID</th>
                <th class="w-1/4 px-4 py-2">Name</th>
                <th class="w-1/4 px-4 py-2">Mobile</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-16 px-4 py-2">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td class="border px-4 py-2">{{ $data->regid }}</td>
                <td class="border px-4 py-2">{{ $data->name }}</td>
                <td class="border px-4 py-2">{{ $data->mobile }}</td>
                <td class="border px-4 py-2">{{ $data->email }}</td>
                <td class=" w-16 border px-4 py-2">
                    
                    <a href="/Party ID Image/{{ $data->image }} " target="_blank"><img src="/Party ID Image/{{ $data->image }}" alt="" class="w-70 h-32" ></a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>



@endsection