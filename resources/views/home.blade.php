@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="border: 5px solid grey; box-shadow: -5px 5px 5px">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/carousel/img1.jpg')}}" width="500px" height="400px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/carousel/img3.jpg')}}" width="500px" height="400px" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('images/carousel/img4.jpg')}}" width="500px" height="400px" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
