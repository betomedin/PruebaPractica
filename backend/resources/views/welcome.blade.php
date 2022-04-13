<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Prueba Técnica La Vega Delivery</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Testing API</h1>
                <code>POST : /api/dias</code>
                <form action="{{ route('dias.store') }}" method="post">
                    @csrf
                    @method("POST")
                    <div class="form-group">
                        <label for="">Inicio</label>
                        <input class="form-control" type="date" name="inicio" value="2022-04-01" required>
                    </div>
                    <div class="form-group">
                        <label for="">Término</label>
                        <input class="form-control" type="date" name="termino" value="2022-04-30" required>
                    </div>
                    <button class="btn btn-primary mt-2">Crear días</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
