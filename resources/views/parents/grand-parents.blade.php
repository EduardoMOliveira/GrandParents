<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <title>Hello, world!</title>

    <style>
        #container {
            margin-top: 50px;
            text-align: center;
        }
    </style>
  </head>
  <body>
        <div class="container-fluid" id="container">
            <div class="alert alert-primary" role="alert">
                Meus Parentes
            </div>
            <div class="row">
                <div class="col-md-3">
                    <select name="grandParents" id="grandParents" class="form-control">
                        <option value="">Selecione um Avô</option>
                        @foreach ($data as $parent)
                            <option value="{{ $parent['id'] }}">{{ $parent['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>    
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </body>
</html>

