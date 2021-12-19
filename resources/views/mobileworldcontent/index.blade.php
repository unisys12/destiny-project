@extends('layouts.layout')

@section('main_content')
<div>
    <h2>Mobile Content Table</h2>
</div>
<div>
{{-- Table Headers --}}
<table>
    <thead>
        <tr>
            @foreach ($columns as $column)
                <td>{{ $column }}</td>
            @endforeach
        <tr>
    </thead>
    <tbody>
            <tr>
        @foreach ($table->values() as $row)
            <td>{{ $row }}</td>
        @endforeach
            </tr>
    </tbody>
</table>

{{-- Table Data --}}
</div>
@endsection
