@extends('layouts.layout')

@section('main_content')
<header>
    <h1>Energy Types</h1>
</header>
<div>
    <div>
        <ul>

                @if ($energy->icon)
                <img src="https://bungie.net/{{ $energy->icon }}" alt="{{ $energy->name }} image">
                @else
                    <span>There is no image to display!</span>
                @endif

            <li>{{ $energy->name }}</li>
            <li>{{ $energy->description }}</li>
            <li>{{ $name }}</li>
        </ul>
        {{-- <code>{{ var_dump($energy) }}</code> --}}
    </div>
</div>
@endsection
