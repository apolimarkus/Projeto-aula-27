<?php
    include "conexao.php";
    include "menu.php";

        $sql = "SELECT * FROM cliente";
        $qry = mysqli_query($con,$sql);
   

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema</title>
  </head>
  <body>
   
    

    <div class="container">
    <h1>Clientes Cadastrados</h1>
        <a href="frmcliente.php" class="btn btn-primary mb-3">Novo Cliente</a>
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th>idcliente</th>
                    <th>Cliente</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Foto</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>

            <tbody>
                
            <?php while ($linha = mysqli_fetch_array($qry)){ ?>
                <tr>    
                    <th><?php echo $linha['idcliente']; ?></th>
                    <th><?php echo $linha['cliente']; ?></th>
                    <th><?php echo $linha['cpf']; ?></th>
                    <th><?php echo $linha['email']; ?></th>
                    <th><?php echo $linha['telefone']; ?></th>
                    <th><?php echo $linha['endereco']?></th>
                    <th><img src="<?php echo $linha['foto']?>" width="75px" height="75px" alt=""></th>
                    <th><a href="frmcliente.php?idcliente=<?php echo isset($linha['idcliente'])? $linha['idcliente']: null; ?>" class="btn btn-success btn-sm"> Editar</a></th>
                    <th><a href="frmcliente.php?op=del&idcliente=<?php echo isset($linha['idcliente'])? $linha['idcliente']: null; ?>" class="btn btn-danger btn-sm"> Excluir</a></th>
                </tr>
            <?php } ?>
            </tbody>
          

        </table>

    </div>
<!--Inicio Footer-->
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Desenvolvido por Marcos Gonçalves. 2022</span>
  </div>
</footer>
<!--Fim Footer-->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>