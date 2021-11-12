@extends('layouts.master')

@section('content')
<link href="{{ asset('/Asset/CSS/index.css') }}" rel="stylesheet">
{{-- <link type="text/css" rel="stylesheet" href="css/lightslider.css" /> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



<img class="content-1" src="/Asset/Image/home_image1.svg" alt="">

<div class="content1">
    <h1>Top Selling Products</h1>

    <ul id="autoWidth" class="cs-hidden">
        @foreach ($products as $item)
            <li class="item-a">
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ $item['gallery'] }}" alt="" />
                        <div class="overlay">
                            <a href="#" class="buy-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">{{ $item['name'] }}</a>
                            <span>{{ $item['category'] }}</span>
                        </div>
                        <a href="#" class="price">Rp. {{ $item['price'] }}</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>



@endsection
