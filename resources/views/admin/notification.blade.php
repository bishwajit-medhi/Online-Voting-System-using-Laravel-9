@extends('admin.layout.master')

@section('content')

<div class="flex justify-center mt-4">
        <div class="text-center w-[50%] ml-6">
            @if(Session::has('message'))
            <span class="text-green-500 text-center">
                {{ Session::get('message') }}
                @php
                Session::forget('message');
                @endphp
                @endif
                @if(Session::has('Errormessage'))
                <span class="text-red-500 text-center">
                    {{ Session::get('Errormessage') }}
                    @php
                    Session::forget('Errormessage');
                    @endphp
                    @endif
                </span>
            </span>
            <form action="{{ route('notification') }}" method="post">
                @csrf
                Write Notification Here: <br>
                <textarea type="text" name="message" class="w-full"> </textarea> <br>
                <button type="submit" name="submit" class="btn btn-success text-black "> Submit </button>
            </form>
        </div>
        <div class="mt-3 w-[50%]">
            <table class="table-fixed mx-5">
                <thead>
                    <tr>
                        <th colspan="3"
                            class="text-center border-2 w-1/2 px-4 py-2 bg-gradient-to-b from-gray-300 to-blue-50">All
                            Notifications
                        </th>
                    </tr>
                </thead>
                <thead>
                    <tr class="text-center">
                        <th class="w-1/4 px-4 py-2">Sl. No</th>
                        <th class="w-1/4 px-4 py-2">Notifications</th>
                        <th class="w-1/4 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    
                    <tr>
                        <td class="border px-4 py-2">{{ $count }}</td>
                        <td class="border px-4 py-2">{{ $data->notification }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('notificationupdate') }}" method="post">

                                @csrf
                                <button type="submit" class="btn btn-danger" name="message" value="{{ $data->id }}">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    @endsection