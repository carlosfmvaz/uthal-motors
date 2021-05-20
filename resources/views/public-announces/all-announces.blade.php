@extends('layouts.main')

@section('title', 'Uthal - All Announces')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 " id="all-announces-filter-div">
                <div class="row">
                    <div id="filter">
                        <label for="" class="form-label">Sort By:</label>
                        <div class="row">
                            <select name="sort-select" class="form-select" id="form-select">
                                <option value="All">All</option>
                                <option value="Low to high">Low to high</option>
                                <option value="High to low">High to low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="all-announces-content"></div>
        </div>

    </div>
    <script src="/js/all-announces.js"></script>
@endsection
