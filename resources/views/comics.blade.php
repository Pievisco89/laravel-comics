@extends('layouts.main')

@section('content')

    <main class="comics">
        
        <div class="container">

            <h4>Current Series</h4>
             
            @foreach ($comics as $comic)
                
                <div class="card">
        
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h5> {{ $comic['title']}} </h5>
                
                </div>

            @endforeach
            
            
      </div>
      
      <span>Load more</span>

    </main>


@endsection
