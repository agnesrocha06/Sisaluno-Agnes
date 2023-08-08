<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//aluno.css">
    <title>Página de Cadastro</title>
</head>
<body>

    <header>
         <h2> Cadastro de Alunos </h2>
    </header>

    <div class="conteudo">
    <form method="GET" action="crudaluno.php">
     <div class="linha">
     <label for="nomealuno">Nome</label>
     <input id="input-nome" type="text" name="nomealuno" placeholder=" Digite o nome do aluno"  required><br>
     <label for="idadealuno">Idade</label>
     <input id="input-idade" type="number" name="idade"> <br>
    </div>

    <div class="linha">
     <label for="datanascimento">Data de Nascimento</label>
     <input id="input-data" type="text" name="datanascimento"> <br>
     <label for="endereco">Endereço</label>
     <input id="input-endereco" type="text" name="endereco" required> <br>
    </div>

    <div class="linha">
    <label for="estatus">Status</label>
     <input id="input-status" type="text" name="estatus"> <br>
     <label for="curso">Curso</label>
     <input id="input-curso" type="text" name="curso" required> <br>
     <label for="turma">Turma</label>
     <input id="input-turma" type="text" name="turma"> <br>
    </div>

    <label for="id"></label>
     <input id="id" type="hidden" name="id" value=" ">

    <div class="linha-final">
     <input id="input-cadastrar" type="submit" name="cadastrar" value="Cadastrar">
     </form>

     <button id="btm-back" class="button"><a href="index.php">Voltar</a></button>
    </div>
</div>

     <script>
    function exibeAlert(){
        alert("Agora você já sabe\ncomo pular linha\nnos métodos: \nalert, confirm e prompt!");
    }
</script>


</body>
</html>