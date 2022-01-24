<?php

    header("Content-type: text/html; charset=utf-8");
    include "conexao.php";
    
    $target_dir = "clientes/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1; //Se for verdadeiro recebe 1, se for falso recebe 0
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $cliente = $_POST["cliente"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    //Exibe o endereçamento da imagem que será salva no diretorio uploads
    //echo $target_file;

    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "É uma imagem - " . $check["mime"];
            $uploadOk = 1;
        }else{
            echo "Não é uma imagem - " . $check["mime"];
            $uploadOk = 0;
        }

    }

    //Checar se arquivo de imagem já existe na pasta upload
    if(file_exists($target_file)){
        echo "<br>Arquivo já existe!";
        $uploadOk = 0;

    }

    //Checar o tamanho do arquivo para envio
    if($_FILES["fileToUpload"]["size"] > 500000){
        echo "Arquivo muito grande.";
        $uploadOk = 0;
        

    }

    //Faz a verificação de quais tipos de arquivos de imagens podem ser upados
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif"){
        echo "Desculpe! Apenas arquivos jpg, jpeg, gif e jfif são permitidos.";
        $uploadOk = 0;

    }

    if($uploadOk == 0){
        echo "Arquivo não enviado!!!";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            echo "<br> O arquivo " . basename($_FILES["fileToUpload"]["name"]) . "<br> foi transfeido.";
            $sql = "INSERT INTO cliente(cliente, cpf, email, telefone, endereco, foto) VALUES('$cliente', '$cpf', '$email', '$telefone', '$endereco', '$target_file')";
            $qry = mysqli_query($con, $sql);
            
        }else{
            echo "Desculpe! Algo deu errado na transferencia do arquivo.";
        }
    }