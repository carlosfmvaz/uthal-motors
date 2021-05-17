@extends('layouts.main')

@section('title', 'Uthal - Main Page')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://wallpaperaccess.com/full/2655842.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://dcdws.blob.core.windows.net/dws-11106477-8345-media/2019/08/Banner-2014-Honda-Civic-01-1920x720.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.vccp.com/singapore/wp-content/uploads/sites/7/2020/08/Mclaren-3.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <section class="section-search">
        <div class="row center">
            <h2>Search for the vehicle that you want!</h2>
        </div>
        <div class="row" id="search-fields">
            <div class="col-md-7 col-sm-12 offset-md-1"><input type="text" class="form-control"></div>
            <div class="col-md-3 col-sm-12"><a href="announces/all" id='see-offers-btn' class="btn btn-danger">See offers
                    ({{ $offersQty }})</a></div>
        </div>
    </section>
    <section class="section-divider" id="welcome-cards">
        <div class="row">
            <div class="col-md-10 col-sm-12 offset-md-1">
                <h4 class="sub-title">Categories:</h4>
                <div class="row">
                    <div class="card col-md-3">
                        <img class="card-img-top" src="img/categories/suv-cat.png" height="140" alt="Card image cap">
                    </div>
                    <div class="card col-md-3">
                        <img class="card-img-top" src="img/categories/hatchback-cat.png" height="140" alt="Card image cap">
                    </div>
                    <div class="card col-md-3">
                        <img class="card-img-top" src="img/categories/convertible-cat.png" height="140"
                            alt="Card image cap">
                    </div>
                    <div class="card col-md-3">
                        <img class="card-img-top" src="img/categories/sedan-cat.png" height="140" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-1 recommend-div">
            <h4 class="sub-title">Recommended for you:</h4>
            <div class="row">
                @if ($announces)
                    @foreach ($announces as $announce)
                        <div class="card col-md-3 col-sm-6">
                            <a href="/announces/announce-details/{{ $announce->id }}" class="card-link">
                                <img class="card-img-top" src="{{ $announce->image }}" height="150" width="100"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $announce->v_brand }} {{ $announce->v_model }}</h5>
                                    <p class="card-subtitle">{{ $announce->cat_name }}</p>
                                    <p class="card-price">{{ $announce->v_price }}</p>
                                </div>
                                <div class="card-footer">
                                    <p><i class="fas fa-map-marker-alt"></i> {{ $announce->city }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="center">
                        <h6>There are not available announces.</h6>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
