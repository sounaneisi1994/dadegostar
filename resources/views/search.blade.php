<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body >

        <form method="post" action="{{route('search')}}">
            @csrf
            <div class="row">
                <div class="input-group col-3 mb-3" style="width:30%; margin:auto">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">
                            جستجو
                        </button>
                    </div>
                    <input name="product" type="text" class="form-control " placeholder="... محصول دیجی کالا">
                </div>
            </div>
        </form>
    </body>
</html>
