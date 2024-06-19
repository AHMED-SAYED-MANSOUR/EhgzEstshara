{{--@extends('layouts.app')--}}
@extends('navbar')
@section('content')
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>
        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->name }} - {{ $result->doctor }} on {{ $result->date }}</li> <!-- Adjust based on your data -->
                @endforeach
            </ul>
        @endif
    </div>
@endsection
@extends('footer')
