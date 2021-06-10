@extends('layouts.app')

@section('tag_title')
    Comics Homepage
@endsection

@section('main_section')
    
    {{-- MAIN --}}
    <main>

        <div class="main-first-section">

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
                    <a href="{{ route('comic', [ 'id' => $comic['id'] ]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <h2> {{ $comic['title'] }} </h2>
                </div>
                @endforeach

                </div>
                

                </div>

                {{-- Load More Button --}}
                <div class="load-more">
                    <a href="">Load More</a>
                </div>

            </div>

            <div class="main-second-section">

                {{-- Wrapper --}}
                <div class="main-menu wrapper">

                    {{-- Second Section Menu --}}

                    {{-- Digital Comics --}}
                    <div class="main-menu-single-el">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                        <a href="">Digital Comics</a>
                    </div>

                    {{-- DC Merchandise --}}
                    <div class="main-menu-single-el">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                        <a href="">DC Merchandise</a>
                    </div>

                    {{-- Subscription --}}
                    <div class="main-menu-single-el">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                        <a href="">Subscription</a>
                    </div>

                    {{-- Comic Shop Locator --}}
                    <div class="main-menu-single-el">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                        <a href="">Comic Shop Locator</a>
                    </div>

                    {{-- DC Power VISA --}}
                    <div class="main-menu-single-el">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                        <a href="">DC Power VISA</a>
                    </div>
                </div>
            </div>
    </main>

    
@endsection