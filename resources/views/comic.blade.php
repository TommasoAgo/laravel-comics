@extends('layouts.app')

@section('main_section')

    {{-- Comic Details --}}
    <div class="comic-details">

        {{-- Comic Image Section --}}
        <div class="comic-image-section">

            {{-- Wrapper --}}
            <div class="wrapper">

                {{-- Comic Image --}}
                <div class="comic-image">
                    <img src="{{ $single_comic['thumb'] }}" alt="{{ $single_comic['title'] }}">
                </div>
            </div>

        </div>

        {{-- Comic About --}}
        <div class="comic-about">

            {{-- Wrapper --}}
            <div class="wrapper">

                <div class="comic-about-details">

                     {{-- Comic Title --}}
                    <div class="comic-title-description">
                        <h1> {{ $single_comic['title'] }} </h1>

                        <div class="comic-price">
                            <span class="price">U.S Price: <span class="actual-price">$ {{ $single_comic['price'] }}</span> </span>
                            <span class="comic-available">Available</span>
                            <span class="check-availability">Check availability <i class="fas fa-sort-down"></i></span>
                        </div>

                        {{-- Description --}}
                        <p class="comic-description">
                            {{ $single_comic['description'] }}
                        </p>
                    </div>

                    {{-- Advertisement --}}
                    <div class="comic-advertisement">
                        <div class="ad-img">
                            <div class="ad-title">
                                Advertisement
                            </div>
                            <img src="{{ asset('img/superman.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                
            </div>

        </div>

        {{-- Second Row --}}
        <div class="comic-second-row">

            <div class="wrapper">

                <div class="comic-details-second">

                    {{-- Talent --}}
                    <div class="talent">
                
                        <h2>Talent</h2>

                        <div class="art-by">
                            Art by: 
                            @foreach ($single_comic['artists'] as $artist)
                                <a href="">{{ $artist }}</a>, 
                            @endforeach
                        </div>
                        
                        <div class="written-by">
                            Written by:
                            @foreach ($single_comic['writers'] as $writer)
                                <a href="">{{ $writer }}</a>,
                            @endforeach
                        </div>
                    </div>

                    {{-- Specs --}}
                    <div class="specs">

                        <h2>Specs</h2>

                        <div class="series">
                            Series: {{ $single_comic['series'] }}
                        </div>

                        <div class="us-price">
                            U.S. Price: {{ $single_comic['price'] }}
                        </div>

                        <div class="onsale-date">
                            On Sale Date: {{ $single_comic['sale_date'] }}
                        </div>  

                    </div>

                </div>
            </div>
            
        </div>



    </div>
@endsection