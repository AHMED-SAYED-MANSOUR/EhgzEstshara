@extends('dashboard')
@section('title')
show offers
@endsection
@section('content')
<table class="table table-bordered">
    <thead>
        <th>offer name</th>
        <th>offer price</th>
        <th>offer photo</th>
    </thead>
    <tbody>

            @foreach( $offers as $offer)
            <tr>
            <td >{{$offer->name}}</td>
            <td class="text-center">{{$offer->price}}</td>
            <td class="text-center">
                @if( $offer->image != NULL)
                <img src="{{asset('images/' . $offer->image)}}"
                style="width:90px,height:90px">
                @else
                {{'No Photo'}}
                @endif
            </td>
            <td class="text-center">
                <A href="{{url('edit-offers',$offer->id)}}" class="btn btn-primary btn-sm">Edit</A>
                <A href="{{url('delete-offers',$offer->id)}}" class="btn btn-danger btn-sm">delete</A>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
