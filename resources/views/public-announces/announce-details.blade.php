@extends('layouts.main')

@section('title', $announce[0]->v_brand . ' ' . $announce[0]->v_model)

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1 details-div">
            <br>
            <div class="row">
                <div class="col-md-5 details-img">
                    <img src="/{{ $announce[0]->image }}" alt="">
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="center">
                        <h3>{{ $announce[0]->v_brand . ' ' . $announce[0]->v_model }}</h3>
                    </div>
                    <hr>
                    <h5>Vehicle Specifications</h5>
                    <p><b>Car body:</b> {{ $announce[0]->cat_name }}</p>
                    <p><b>Color:</b> {{ $announce[0]->v_color }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $announce_location}}</p>
                    <div id="price-div">
                        <h2>$ {{ $announce[0]->v_price }}</h2>
                    </div>
                    <p><b>Description:</b><br>{{ $announce[0]->v_description }}</p>
                    <button class="btn btn-danger" type="submit" id="order-button">Order Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
