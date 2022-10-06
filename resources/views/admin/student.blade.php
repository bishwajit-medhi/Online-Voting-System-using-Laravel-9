@extends('admin.layout.master')

@section('content')

<div class="flex flex-col mt-4">
    @if(Session::has('message'))
    <div class="text-green-500 text-center">
        {{ Session::get('message') }}
        @php
            Session::forget('message');
        @endphp
    @endif
    @if(Session::has('Errormessage'))
    <div class="text-red-500 text-center">
        {{ Session::get('Errormessage') }}
        @php
            Session::forget('Errormessage');
        @endphp
    @endif
    </div>
    <div class="text-center">
       
        <form action="{{ route('addstudent') }}" method="post">
            @csrf
            Registration Number: <br>
            <input type="text" name="regno"> <br>
            <input type="submit" name="submit">
        </form>
    </div>
    <div class="mt-3">
        <table class="table-fixed mx-5">
            <thead>
                <tr>
                    <th colspan="6" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">All Student Details</th>
                </tr>
            </thead>
  <thead>
    <tr class="text-center">
      <th class="w-1/4 px-4 py-2">Reg. No</th>
      <th class="w-1/4 px-4 py-2">Name</th>
      <th class="w-1/4 px-4 py-2">Mobile</th>
      <th class="w-1/4 px-4 py-2">Email</th>
      <th class="w-1/4 px-4 py-2">Gender</th>
      <th class="w-1/4 px-4 py-2">Is Voted</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
        <td class="border px-4 py-2">{{ $data->regno }}</td>
        <td class="border px-4 py-2">{{ $data->name }}</td>
        <td class="border px-4 py-2">{{ $data->mobile }}</td>
        <td class="border px-4 py-2">{{ $data->email }}</td>
        <td class="border px-4 py-2">{{ $data->gender }}</td>
        <td class="border px-4 py-2">{{ $data->isvoted }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    </div>

</div>

@endsection