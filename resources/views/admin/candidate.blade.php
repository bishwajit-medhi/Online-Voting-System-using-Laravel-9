@extends('admin.layout.master')

@section('content')

<div class="mt-3 ">
    <table class="table-auto mx-9">
        <thead>
            <tr>
                <th colspan="9" class="text-center border-2 w-1/2 px-4 py-2">All Candidate Details</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th colspan="9" class="text-center border-2 w-1/2 px-4 py-2">President</th>
            </tr>
        </thead>
        <thead>
            <tr class="text-center">
                <th class="w-1/4 px-4 py-2">Reg. ID</th>
                <th class="w-1/4 px-4 py-2">Name</th>
                <th class="w-1/4 px-4 py-2">Mobile</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-1/4 px-4 py-2">Party</th>
                <th class="w-1/4 px-4 py-2">Image</th>
                <th class="w-1/4 px-4 py-2">Signature</th>
                <th class="w-1/4 px-4 py-2">Status</th>
                <th class="w-1/4 px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($president as $data)
            <tr>
                <td class="border px-4 py-2">{{ $data->regno }}</td>
                <td class="border px-4 py-2">{{ $data->name }}</td>
                <td class="border px-4 py-2">{{ $data->mobile }}</td>
                <td class="border px-4 py-2">{{ $data->email }}</td>
                <td class="border px-4 py-2">{{ $data->party }}</td>
                <td class="border px-4 py-2">
                    
                    <a href="/Profile Image/{{ $data->image }} " target="_blank"><img src="/Profile Image/{{ $data->image }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">
                    
                    <a href="/signature/{{ $data->image }} " target="_blank"><img src="/signature/{{ $data->signature }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">{{ $data->status }}</td>
                <td class="border px-4 py-2">
                    <form action="{{route('updatestatus')}}" method="post">
                        @csrf
                @if($data->status == 'Approved' AND $data->status != 'Rejected')
                    <button type="button" class="btn btn-outline-success" value="{{$data->id}}" name="approve" disabled>Approved</button>
                @elseif($data->status != 'Approved' AND $data->status == 'Rejected')
                    <button type="button" class="btn btn-outline-danger" value="{{$data->id}}"name="reject" disabled>Rejected</button>
                @else
                    <button type="submit" class="btn btn-outline-success" value="{{$data->id}}" name="approve">Approve</button>
                    <button type="submit" class="btn btn-outline-danger" value="{{$data->id}}"name="reject">Reject</button>
                @endif
                </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="8" class="text-center border-2 w-1/2 px-4 py-2 font-extrabold">
                    General Secratery
                </td>
            </tr>
            @foreach ($gs as $gs)
            <tr>
                <td class="border px-4 py-2">{{ $gs->regno }}</td>
                <td class="border px-4 py-2">{{ $gs->name }}</td>
                <td class="border px-4 py-2">{{ $gs->mobile }}</td>
                <td class="border px-4 py-2">{{ $gs->email }}</td>
                <td class="border px-4 py-2">{{ $gs->party }}</td>
                <td class="border px-4 py-2">
                    
                    <a href="/Profile Image/{{ $gs->image }} " target="_blank"><img src="/Profile Image/{{ $gs->image }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">
                    
                    <a href="/signature/{{ $gs->image }} " target="_blank"><img src="/signature/{{ $gs->signature }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">{{ $gs->status }}</td>
                <td class="border px-4 py-2">
                    
                    <form action="{{route('updatestatus')}}" method="post">
                        @csrf
                @if($gs->status == 'Approved' AND $gs->status != 'Rejected')
                    <button type="button" class="btn btn-outline-success" value="{{$gs->id}}" name="approve" disabled>Approved</button>
                @elseif($gs->status != 'Approved' AND $gs->status == 'Rejected')
                    <button type="button" class="btn btn-outline-danger" value="{{$gs->id}}"name="reject" disabled>Rejected</button>
                @else
                    <button type="submit" class="btn btn-outline-success" value="{{$gs->id}}" name="approve">Approve</button>
                    <button type="submit" class="btn btn-outline-danger" value="{{$gs->id}}"name="reject">Reject</button>
                @endif
                </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="8" class="text-center border-2 w-1/2 px-4 py-2 font-extrabold">
                    Assistent General Secratery
                </td>
            </tr>
            @foreach ($ags as $ags)
            <tr>
                <td class="border px-4 py-2">{{ $ags->regno }}</td>
                <td class="border px-4 py-2">{{ $ags->name }}</td>
                <td class="border px-4 py-2">{{ $ags->mobile }}</td>
                <td class="border px-4 py-2">{{ $ags->email }}</td>
                <td class="border px-4 py-2">{{ $ags->party }}</td>
                <td class="border px-4 py-2">
                    
                    <a href="/Profile Image/{{ $ags->image }} " target="_blank"><img src="/Profile Image/{{ $ags->image }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">
                    
                    <a href="/signature/{{ $ags->image }} " target="_blank"><img src="/signature/{{ $ags->signature }}" alt="" class="w-44 h-32" ></a>
                </td>
                <td class="border px-4 py-2">{{ $ags->status }}</td>
                <td class="border px-4 py-2">
                    
                    <form action="{{route('updatestatus')}}" method="post">
                        @csrf
                @if($ags->status == 'Approved' AND $ags->status != 'Rejected')
                    <button type="button" class="btn btn-outline-success" value="{{$ags->id}}" name="approve" disabled>Approved</button>
                @elseif($ags->status != 'Approved' AND $ags->status == 'Rejected')
                    <button type="button" class="btn btn-outline-danger" value="{{$ags->id}}"name="reject" disabled>Rejected</button>
                @else
                    <button type="submit" class="btn btn-outline-success" value="{{$ags->id}}" name="approve">Approve</button>
                    <button type="submit" class="btn btn-outline-danger" value="{{$ags->id}}"name="reject">Reject</button>
                @endif
                </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection