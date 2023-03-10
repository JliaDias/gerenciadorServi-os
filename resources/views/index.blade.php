<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
        <!--Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #D3D3D3;

            }
        </style>

    </head>
    <body>
        <div class="container px-5">

            <nav class="navbar navbar-dark navbar-expand-sm bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        

            
        <div class="bg-white">
            <div class="container">
        &nbsp; 

        <h4>Cadastrar - Agendamento de Potenciais Clientes</h4>

        &nbsp; 

        <h5>Sistema utilizado para agendamento de serviços</h5>

        &nbsp; 

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome:</label>
                <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Insira seu nome" require>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telefone:</label>
                <input type="number" class="form-control" id="exampleInputPhone" placeholder="Insira seu telefone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Origem:</label>
                <input type="text" class="form-control" id="exampleInputOrigen" placeholder="Insira seu celular">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control" id="exampleInputOrigen" placeholder="Insira seu celular">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Observação:</label>
                <textarea class="form-control" input type="text" id="exampleFormControlobservacao" placeholder="Insira uma observação" rows="5"></textarea>
            </div> 
            &nbsp; 
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        </div>
        </div>
        </div>
        
         
    </body>
        
</html>
