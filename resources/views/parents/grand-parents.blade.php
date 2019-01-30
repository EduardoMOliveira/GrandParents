<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Meus Parentes</title>

    <style>
        #container {
            margin-top: 50px;
            text-align: center;
        }
        .table_parents {
            margin-top: 20px;
            margin-left: 10px;
        }

        #grandParents {
            margin-top: 20px;
            margin-left: 10px;
        }

    </style>
  </head>
  <body>
        {{ csrf_field() }}
        <div class="container-fluid" id="container">
            <div class="alert alert-primary" role="alert">
                Desafio dos Parentes
            </div>
            <div class="row">
                <div class="col-md-3">
                    <select name="grandParents" id="grandParents" class="form-control">
                        <option value="">Selecione um Avo(a)</option>
                        @foreach ($data as $parent)
                            <option value="{{ $parent['id'] }}">{{ $parent['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 table_parents">
                    <table class="table table-sm table-striped table-bordered table-hover" id="table_parents" style="display:none">
                        <thead>
                            <th>Filhos</th>
                            <th>Ação</th>
                        </thead>
                        <tbody id="tab-parents"></tbody>
                    </table>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/grand-parents.js') }}"></script>

  </body>
</html>

