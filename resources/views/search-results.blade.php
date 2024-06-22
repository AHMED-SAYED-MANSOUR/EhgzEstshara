{{--@extends('layouts.app')--}}
@extends('navbar')
@section('content')
    @php
        $user = Illuminate\Support\Facades\Auth::user();
        $count = '';

        if ($user) {
            $count = App\Models\CartItem::where('user_id', $user->id)->count();
        }
    @endphp

    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>
        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->name }} - {{ $result->doctor }} on {{ $result->date }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
@extends('footer')
