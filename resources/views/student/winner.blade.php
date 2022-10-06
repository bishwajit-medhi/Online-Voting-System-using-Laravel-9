@extends('student.layout.master')

@section('content')

<div class="mt-3 mx-5">
  <table class="table-fixed mx-5 ">
    <thead>
      <tr>
        <tr class="text-center border bg-gradient-to-b from-blue-300 to-blue-50">
          <th class="w-1/2 px-4 py-2">Name</th>
          <th class="w-1/4 px-4 py-2">Party</th>
          <th class="w-1/4 px-4 py-2">Votes</th>
          <th class="w-1/4 px-4 py-2">Winner</th>
        </tr>
        
      </tr>
    </thead>
    <thead>
      <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">President</th>
    </thead>
    <tbody>
      @foreach ($p as $data)
      @if ($data->position == "President")
      <tr class="text-center border">
        <td class="w-1/2 px-4 py-2">{{ $data->name }}</td>
        <td class=" w-1/2 px-4 py-2">{{ $data->party }}</td>
        <td class=" w-1/2 px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">
            @if ($data->iswinner == 1)
            Winner
          @endif
        </td>
      </tr>
      @endif
      @endforeach 
       
      
      <tr>
        <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">General Secratery</th>
      </tr>
      @foreach ($gs as $data)
      @if ($data->position == "General Secratery")
      <tr class="text-center border">
        <td class="px-4 py-2">{{ $data->name }}</td>
        <td class=" px-4 py-2">{{ $data->party }}</td>
        <td class=" px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">
            @if ($data->iswinner == 1)
            Winner
          @endif
        </td>
      </tr>
      @endif
      @endforeach  

      <tr>
        <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">Assistant General Secratery</th>
      </tr>
      @foreach ($ags as $data)
      @if ($data->position == "Assistant General Secratery")
      <tr class="text-center border">
        <td class="px-4 py-2">{{ $data->name }}</td>
        <td class=" px-4 py-2">{{ $data->party }}</td>
        <td class=" px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">
            @if ($data->iswinner == 1)
            Winner
          @endif
        </td>
      </tr>
      @endif
      @endforeach  
    </tbody>
  </table>
</div>
@endsection