@extends('dashboard')
@section('title')
show Trainer
@endsection
@section('content')
<table class="table table-bordered">
    <thead>
        <th>Trainer name</th>
        <th>Trainer title</th>
        <th>Trainer photo</th>
    </thead>
    <tbody>

            @foreach( $trainers as $trainer)
            <tr>
            <td >{{$trainer->name}}</td>
            <td class="text-center">{{$trainer->title}}</td>
            <td class="text-center">
                @if($trainer->image != NULL)
                <img src="{{asset('images/' . $trainer->image)}}"
                style="width:10px,height:10px">
                @else
                {{'No Photo'}}
                @endif
            </td>
            <td class="text-center">
                <A href="{{url('edit-trainers',$trainer->id)}}" class="btn btn-primary btn-sm">Edit</A>
                <A href="{{url('delete-trainers',$trainer->id)}}" class="btn btn-danger btn-sm">delete</A>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
