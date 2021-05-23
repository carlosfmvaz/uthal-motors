@extends('layouts.main')

@section('title', 'Make Announce')

@section('content')
    <div class="container">
        <div class="announce-header">
            <h2>Create announce</h2>
            <p>Here you are able to create an announce as the way as you want!</p>
        </div>
        <form action="create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Vehicle Category</label>
                    <select name="category" id="" class="form-control">
                        <option selected value="">--- Choose an Option ---</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['cat_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label for="">Brand</label>
                    <input type="text" id="" name="brand" class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="">Model</label>
                    <input type="text" name="model" id="" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-4">
                    <label for="">Country</label>
                    <select name="country" id="country-select" class="form-select">
                        <option value="" disabled selected>--- Choose a Country ---</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="">State</label>
                    <select name="state" id="state-select" class="form-select">
                        <option value="" disabled selected>--- Choose a Region ---</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="">City</label>
                    <select name="city" id="city-select" class="form-select">
                        <option value="" disabled selected>--- Choose a City ---</option>
                    </select>
                </div>
                <input type="hidden" id="lat-id" name="latitude">
                <input type="hidden" id="long-id" name="longitude">
            </div>
            <br>
            <div class="row">
                <div class="form-group col-3">
                    <label for="">Price</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>
                <div class="form-group col-3">
                    <label for="">Color</label>
                    <select name="color" id="" class="form-control">
                        <option selected value="">--- Choose an Option ---</option>
                        <option value="Black">Black</option>
                        <option value="White">White</option>
                        <option value="Red">Red</option>
                        <option value="Gray">Gray</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="">Announce Description:</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="">Image Upload: </label>
                    <input type="file" name="image" id="">
                </div>
            </div>
            <br>
            <div class="center">
                <button type="submit" class="btn announce-btn btn-default-color">Create</button>
            </div>
        </form>
    </div>
    <script src="/js/location-api.js"></script>

@endsection
