@extends('admin.layout.master')

@section('content')

<div class="cards grid grid-cols-2 mx-56 mt-14  text-center ">
  <div class="max-w-sm rounded overflow-hidden shadow-md mb-3 bg-gradient-to-b from-green-300 to-green-50">

    <div class="px-6 py-4 ">
      <div class="font-bold text-xl mb-2">Total Student</div>
      <p class="text-gray-700 text-3xl">
        {{ $totaluser }}
      </p>
    </div>
  </div>

  <div class="max-w-sm rounded overflow-hidden shadow-md mb-3 bg-gradient-to-b from-blue-300 to-blue-50">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Total Candidate</div>
      <p class="text-gray-700 text-3xl">

        {{ $candidate }}

      </p>
    </div>
  </div>

  <div class="max-w-sm rounded overflow-hidden shadow-md bg-gradient-to-b from-blue-300 to-blue-50">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Registered Student</div>
      <p class="text-gray-700 text-3xl">
        {{ $user }}
      </p>
    </div>

  </div>

  <div class="max-w-sm rounded overflow-hidden shadow-md bg-gradient-to-b from-green-300 to-blue-50">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Total Voted Student</div>
      <p class="text-gray-700 text-3xl">
        {{ $voted }}
      </p>
    </div>
  </div>
</div>
<div class="mt-3 mx-5">
  <table class="table-fixed mx-5 ">
    <thead>
      <tr>
        <tr class="text-center border bg-gradient-to-b from-blue-300 to-blue-50">
          <th class="w-1/2 px-4 py-2">Name</th>
          <th class="w-1/4 px-4 py-2">Party</th>
          <th class="w-1/4 px-4 py-2">Votes</th>
          <th class="w-1/4 px-4 py-2">Action</th>
        </tr>
        
      </tr>
    </thead>
    <thead>
      <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">President</th>
    </thead>
    <tbody>
      @foreach ($president as $data)
      @if ($data->status == "Approved" && $data->position == "President")
      <tr class="text-center border">
        <td class="w-1/2 px-4 py-2">{{ $data->name }}</td>
        <td class=" w-1/2 px-4 py-2">{{ $data->party }}</td>
        <td class=" w-1/2 px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">

          <form action="{{ route('updatewinner') }}" method="POST">
            @csrf
            @if ($data->iswinner == 1)
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }} " disabled>
              Winner
          </button>  
           @else
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }}">
              Winner
          </button>
          @endif
          </form>
        </td>
      </tr>
      @endif
      @endforeach  
      
      <tr>
        <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">General Secratery</th>
      </tr>
      @foreach ($gs as $data)
      @if ($data->status == "Approved" && $data->position == "General Secratery")
      <tr class="text-center border">
        <td class="px-4 py-2">{{ $data->name }}</td>
        <td class=" px-4 py-2">{{ $data->party }}</td>
        <td class=" px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">
          <form action="{{ route('updatewinner') }}" method="POST">
            @csrf
            @if ($data->iswinner == 1)
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }} " disabled>
              Winner
          </button>  
           @else
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }}">
              Winner
          </button>
          @endif
          </form>
        </td>
      </tr>
      @endif
      @endforeach  
      <tr>
        <th colspan="4" class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">Assistant General Secratery</th>
      </tr>
      @foreach ($ags as $data)
      @if ($data->status == "Approved" && $data->position == "Assistant General Secratery")
      <tr class="text-center border">
        <td class="px-4 py-2">{{ $data->name }}</td>
        <td class=" px-4 py-2">{{ $data->party }}</td>
        <td class=" px-4 py-2">{{ $data->votecount }}</td>
        <td class=" w-1/2 px-4 py-2">
          <form action="{{ route('updatewinner') }}" method="POST">
            @csrf
            @if ($data->iswinner == 1)
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }} " disabled>
              Winner
          </button>  
           @else
            <button type="submit" class="btn btn-success text-black" name="candidate" value="{{ $data->candidate_id }}">
              Winner
          </button>
          @endif
           
          </form>
        </td>
      </tr>
      @endif
      @endforeach  
    </tbody>
  </table>
</div>
@endsection