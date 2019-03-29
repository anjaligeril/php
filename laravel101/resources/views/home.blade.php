@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Post</div>
                <div class="col-lg-7">
                <form method="GET" action="/add">

                    <div class="form-group">
                        <label for="email">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <input type="text" class="form-control" id="descri" placeholder="Description" name="descri">
                    </div>


                    <button type="submit" class="btn btn-default"  >Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
