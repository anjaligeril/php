@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Post</div>
                    <div class="col-lg-7">
                        <form method="POST" action="/update/{{$post->id}}">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="descri">Description:</label>
                                <input type="text" class="form-control" id="descri" placeholder="Description" name="descri" value="{{$post->description}}">
                            </div>


                            <button type="submit" class="btn btn-default"  >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection