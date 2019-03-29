@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <h2>Post</h2>
                    <div class="col-lg-7 card ">

                        <h2 class="card-header">{{$post->title}}</h2>
                        <h5 class="card-body">{{$post->description}}</h5>
                    </div>

            </div>
        </div>
    </div>
@endsection