<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>SysTask</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justfy-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="POST">
                    <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <p>DATA</p>
                                <input type="datetime" name="data" id="data">
                                </div>
                                <div class="col-12 col-sm-6">
                                <p>TAREFA</p>
                                <input type="text" name="tarefa" id="tarefa">
                                </div>
                            
                    </div>
                    <div class="form-group row">
                    <div class="col-12">
                        <label>DESCRIÇÃO</label>
                        </div>
                        <div class="col-12">
                        <input type="text" name="descricao" id="descricao">
                
                        <button type="submit" class="btn btn-outlin-primary btn-md">Cadastrar</button>
                    </div>
            </form>
            <div class="row justfy-content-center">
            <h3>LISTA DE TAREFA</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DATA</th>
                            <th scope="col">TAREFA</th>
                            <th scope="col">DESCRIÇÃO</th>
                            <th scope="col">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <th>00/00/00</th>
                            <th>Teste</th>
                            <th>Prova de teste</th>
                            <th><button type="submit" class="btn btn-outline-success">✔️</button><button type="submit" class="btn btn-outline-danger">✖️</button></th>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>