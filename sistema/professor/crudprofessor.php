<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//professor.css">
    <title>Página de Cadastro</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Cadastro de Professor </h2>
    </header>

    <div class="container" style="text-align: center;">
<?php

require_once('conexao-professor.php');

if(isset($_GET['cadastrar'])){
                $id = $_GET["id"];
                $nome = $_GET["nomeprof"];
                $idade = $_GET["idade"];
                $datanascimento = $_GET["datanascimento"];
                $endereco = $_GET["endereco"];
                $estatus = $_GET["estatus"];
                $email = $_GET["email"];
                
                if(($idade >= 18) && ($idade))  {
                        $sql = "INSERT INTO professor(id,nome,idade, datanascimento, endereco, estatus, email) 
                                VALUES('$id','$nome','$idade', '$datanascimento', '$endereco', '$estatus','$email')";

                        $sqlcombanco = $conexao-> prepare($sql);

                        if($sqlcombanco->execute())
                            {
                     
                                echo "<script> alert('Formulário enviado com sucesso!'); </script>";
                                   
                                echo "<p> <b> OK! </b> O professor $nome foi incluido com sucesso no sistema!!! </p>";
                                echo "<br>" ; 
                                echo " <button class='button3'><a href='index.php'>voltar</a></button>";
                            }
                }
            else {
                    echo "Digite uma idade válida";
                }   
        }
        #######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $email = $_POST["email"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus, email= :email WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_BOOL);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O(A) professor(a) $nome foi alterado com sucesso!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='.//listaprofessor.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O(A) professor (a) $id foi excluido!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='.//listaprofessor.php'>voltar</a></button>";
        }

}
    
?>
</div>
</body>
</html>
