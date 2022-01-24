@extends('layouts.app')
@section('content')
<main>
    <h1>Lista fumetti</h1>
    <div class="contenitore">

        @foreach ($comics as $comic )
            <div class="card">
                <div class="copertina">

                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    
                </div>

                <p>{{ $comic['title'] }}</p>

            </div>
        @endforeach





    </div>

  </main>
@endsection