@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contador</h1>

    <div style="text-align: center">
        <form action="{{ url('counter-classic') }}" method="post">
            @csrf
            <button type="submit" name="increase">+</button>

            <input type="hidden" name="count" value="{{ $count }}">
            <h1>{{ $count }}</h1>

            <button type="submit" name="decrease">-</button>
        </form>
    </div>
</div>
@endsection