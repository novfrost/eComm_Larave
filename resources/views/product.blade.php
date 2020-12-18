@extends('master')
@section('content')

    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                
                @foreach ($products as $item)

                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <img class="d-block w-100 slider-img" src="{{$item['gallery']}}">
                </div>

                @endforeach
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="trending-wrapper">
            <h3>Trending Products</h3>

            @foreach ($products as $item)

            <div>
                <img class="d-block w-100 slider-img" src="{{$item['gallery']}}">
            </div>

            @endforeach
        </div>
    </div>
    
    
@endsection