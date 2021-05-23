@extends('layouts.main')

@section('title', $announce[0]->v_brand . ' ' . $announce[0]->v_model)

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1 edit-details-div">
            <br>
            <div class="row">
                <div class="col-md-5 details-img">
                    <img src="/{{ $announce[0]->image }}" alt="">
                </div>
                <div class="col-md-5 offset-md-1">
                    <h5>Editing Announce</h5>
                    <form action="/announces/update-announce" method="POST" id="edit-announce-form">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" class="form-control" value="{{ $announce[0]->id }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Brand:</label>
                            <input type="text" name="brand" class="form-control" value="{{ $announce[0]->v_brand }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Model:</label>
                            <input type="text" name="model" class="form-control" value="{{ $announce[0]->v_model }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Car Body:</label>
                            <input type="text" class="form-control" value="{{ $announce[0]->cat_name }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Color:</label>
                            <input type="text" name="color" class="form-control" value="{{ $announce[0]->v_color }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Price:</label>
                            <input type="text" name="price" id="price" class="form-control"
                                value="{{ $announce[0]->v_price }}">
                        </div>
                        <div class="row">
                            <label for="" class="form-label">Description:</label>
                            <textarea class="form-control" name="description">{{ $announce[0]->v_description }}</textarea>
                        </div>
                        <br>
                        <div class="row">
                            <button class="btn btn-success" type="submit" id="order-button">Save</button>
                        </div>
                        <br>
                    </form>
                    <form action="/announces/delete-announce/" method="POST" class="center" id="delete-announce-form">
                        @csrf
                        <input type="hidden" name="id" class="form-control" value="{{ $announce[0]->id }}">
                        <button type="submit" class="btn btn-danger">Delete Announce</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
