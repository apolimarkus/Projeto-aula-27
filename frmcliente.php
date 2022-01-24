
<?php   
    include "menu.php";
    include "conexao.php";
   

   
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema - Cadastro Cliente</title>
  </head>
  <body>
   
  <div class="container">
    <!--Inicio do Fomrulário-->
    <h1>Cadastrar novo Cliente</h1><hr>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente">
                        
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                        
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                        
                    </div>
                </div>
                <div class="col-4">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                        
                    </div>
                </div>
            </div>

           
            
            <input type="submit" value="Cadastrar" class="btn btn-warning">
        </form>
    <!--Fim do Formulário-->
    </div>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>