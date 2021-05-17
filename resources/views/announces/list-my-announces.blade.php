@extends('layouts.main')

@section('title', 'Uthal - My Announces')

@section('content')
    <div class="row">
        <div id="my-announces-div">
            <div class="col-md-10 offset-md-1">
                @foreach ($announces as $announce)
                    <div class="card">
                        <h5 class="card-header">{{ $announce['v_brand'] }} {{ $announce['v_model'] }}</h5>
                        <div class="card-body">
                            <p class="card-text">Posted in {{$announce['created_at']}}</p>
                            <a href="/announces/edit/{{$announce['id']}}" class="btn btn-danger">See announce</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
