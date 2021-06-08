@extends('layouts.app')

@section('tag_title')
    Comics Homepage
@endsection

@section('main_section')
    
    {{-- MAIN --}}
    <main>

        {{-- Wrapper --}}
        <div class="wrapper">

            {{-- Title --}}
            <div class="main-title">
                <h1>Current Series</h1>
            </div>

           <div class="comics-container">

                 {{-- Single Comic Series --}}
            
            @foreach ($comics_array as $comic)
            <div class="single-comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h2> {{ $comic['title'] }} </h2>
            </div>
            @endforeach

           </div>
            

        </div>

        {{-- Load More Button --}}
        <div class="load-more">
            <a href="">Load More</a>
        </div>

    </main>

    
@endsection