@extends('layouts.app')

@section('content')
    <h1>Tables</h1>
    @if(count($tables) > 0)
        @foreach($tables as $table)
            <div class="card">
                <h3>{{$table->id}}</h3>
            </div>
        @endforeach
    @else
        <p>no table found</p>
    @endif
@endsection
