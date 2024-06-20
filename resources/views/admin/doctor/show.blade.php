@extends('dashboard')
@section('title')
show Doctors
@endsection
@section('content')
<table class="table table-bordered">
    <thead>
        <th>Doctor name</th>
        <th>Doctor title</th>
        <th>Doctor photo</th>
    </thead>
    <tbody>

            @foreach( $doctors as $doctor)
            <tr>
            <td >{{$doctor->name}}</td>
            <td class="text-center">{{$doctor->title}}</td>
            <td class="text-center">
                @if($doctor->image != NULL)
                <img src="{{asset('images/' . $doctor->image)}}"
                style="width:10px,height:10px">
                @else
                {{'No Photo'}}
                @endif
            </td>
            <td class="text-center">
                <A href="{{url('edit-doctors',$doctor->id)}}" class="btn btn-primary btn-sm">Edit</A>
                <A href="{{url('delete-doctors',$doctor->id)}}" class="btn btn-danger btn-sm">delete</A>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
