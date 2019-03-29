<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <table class="table">
                    <thead>
                    <tr class="danger" >
                        <th>id</th>
                        <th>user Name</th>
                        <th>email</th>
                        <th>Title</th>
                        <th>Description</th>
                        @if(Auth::check())
                        <th>Delete</th>
                        <th>Update</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($posts as $singlePost)
                    <tr class="success">
                        <td>{{$singlePost->id}}</td>

                        <td>{{$singlePost->user->name}}</td>
                        <td>{{$singlePost->user->email}}</td>
                        <td><a href="/post?id={{$singlePost->id}}">{{$singlePost->title}}</a></td>
                        <td>{{$singlePost->description}}</td>
                      @if(Auth::check())
                          @if(Auth::user()->id==$singlePost->user_id)
                        <td><a class="btn btn-danger" href="/delete?id={{$singlePost->id}}">Delete</a></td>
                        <td><a class="btn btn-success" href="/update/{{$singlePost->id}}">Update</a></td>
                              @endif
                       @endif
                    </tr>

                       @endforeach
                    </tbody>
                </table>

            </div>
            </div>
        </div>
    </body>
</html>
