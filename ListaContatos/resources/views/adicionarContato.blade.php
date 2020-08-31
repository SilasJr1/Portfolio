<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Adicionar Contato</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well"> Adicionar Contato </h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="add" method="post">
                      {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                                <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Endereço</label>
                            <div class="controls">
                                <input size="80" class="form-control" name="endereco" type="text" placeholder="Endereço" required="" value="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Telefone</label>
                            <div class="controls">
                                <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" required="" value="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input size="40" class="form-control" name="email" type="email" placeholder="Email" required="" value="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Sexo</label>
                            <div class="controls">
                                <div class="form-check">
                                    <p class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M"/> Masculino
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F"/> Feminino
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="form-actions">
                            <br />

                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <a href="/" type="btn" class="btn btn-default">Voltar</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
