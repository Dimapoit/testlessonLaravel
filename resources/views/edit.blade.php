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
            <div class="row">
                <div class="title m-b-md">
                    Car update form
                </div>
            </div>


{{--            <form action="{{route('car.update', ['id'=>$model->id])}}" method="post">--}}
{{--                <input name="_token" value="{{csrf_token()}}" type="hidden">--}}
{{--                @method('patch')--}}
{{--                <div class="row">--}}
{{--                    <label>Car name</label>--}}
{{--                    <input name="name" class="form-control" value="{{$model->name}}">--}}

{{--                    <div class="row">--}}
{{--                        <label>Description</label>--}}
{{--                        <textarea name="description" class="form-control">{{$model->description}}</textarea>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <input type="submit" value="Update">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
            {!! Form::model($model, ['url'=>route('car.update', $model->id), 'method'=>'PATCH']) !!}
                <div class="row">
                    <label>Car name</label>
                    <input name="name" class="form-control" value="{{$model->name}}">

                    <div class="row">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{$model->description}}</textarea>
                    </div>

                    <div class="row">
                        <input type="submit" value="Update">
                    </div>
                </div>
            {{Form::close()}}
        </div>
    </body>
</html>
