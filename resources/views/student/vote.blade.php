@extends('student.layout.master')

@section('content')

<div>
    
    <div class="mx-48 ">
        <form action="{{route("castvote")}}" method="POST">
            @csrf
            <table class="table table-bordered table-info align-middle" align="center">
                <tr>
                    <th class="text-center" colspan="8"><h1><b> CAST YOUR VOTE </b></h1></th>
                </tr>
                <tr class="text-center text-uppercase">
                    <th class="">Image</th>
                    <th>Name</th>
                    <th>Party</th>
                    <th>Cast Your Vote</th>
                </tr>
                <tr >
                    <th class="text-center" colspan="8">President</th>
                </tr>
            @foreach ($president as $p)
                <tr class="text-center">
                    <td> <img src="{{ asset('profile image/'. $p->image) }}" class="w-36"  /> </td>
                    <td>{{ $p->name }} </td>
                    <td>{{ $p->party }}</td>
                    <td align="center"><input type="radio" name="president" value="{{ $p->id }}" id="" class="self-center"></td>
                </tr>        
            @endforeach
            <tr>
                <th class="text-center" colspan="8">General Secratery</th>
            </tr>
    
            @foreach ($gs as $g)
                <tr class="text-center">
                    <td> <img src="{{ asset('/profile image/' . $g->image) }}" class="w-36"  /> </td>
                    <td>{{ $g->name }}</td>
                    <td>{{ $g->party }}</td>
                    <td><input type="radio" name="general" value="{{ $g->id }}" id=""></td>
                </tr>        
            @endforeach
            <tr>
                <th class="text-center" colspan="8">Assistant General Secratary</th>
            </tr>
            @foreach ($ags as $c)
                <tr class="text-center">
                    <td> <img src="{{ asset('profile image/'. $c->image) }}"class="w-[27%]" /> </td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->party }}</td>
                    <td><input type="radio" name="ags" value="{{ $c->id }}" id=""></td>
                </tr>        
            @endforeach
            <tr >
                <td class="text-center" colspan="8"> <button type="submit" class="btn btn-success text-red-600">Cast Your Vote</button> </td>
            </tr>
            </table>
        </form>
    </div>
</div>
    
@endsection