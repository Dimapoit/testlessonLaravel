<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                <div class="title m-b-md">
                    {{$car}}
                </div>

                <table>
                    <tr>
                        <thead>
                        <th>name</th>
                        <th>description</th>
                        </thead>
                    </tr>

                    <tbody>
                        @foreach($cars as $car)
                        <tr>
                            <td>
                                {{$car->name}}
                            </td>
                            <td>
                                {{$car->description}}
                            </td>
                            <td>
                                <a href="{{route('car.edit', $car->id)}}">Edit</a>
                            </td>
                            <td>
                                {{Form::open(['route'=>['car.delete', $car->id], 'method'=>'delete'])}}
                                <button type="submit">Delete</button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <form action="{{route('save.car')}}" method="post">
                    <input name="_token" value="{{csrf_token()}}" type="hidden">
                    <div class="row">
                        <label>Car name</label>
                        <input name="name" class="form-control">

                        <div class="row">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <div class="row">
                            <input type="submit" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
