
<?php 
require '../Config_Banco.php';
include '../src/Cadastro.php';
require '../src/Path.php';


$cadastro = new Cadastro($mysql);
$cadastros = $cadastro->exibirTodos();

?>

<!--- Adicionar Entrada de Dados ---> 

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $cadastro = new Cadastro($mysql);
    $cadastro->adicionar($_POST['nome']);

     //redirecionar
     path('../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CADASTRO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div id="container-pontilhado">
        <h4>QUER SEU NOME REGISTRADO? ADICIONE SEU CADASTRO</h4>
        <form action="" method="POST">
            <p>
                <label for="">Digite seu nome completo :)</label>
                <input class="campo-form" type="text" name="nome" id="id" />
            </p>
            <p>
                <button class="btn btn-primary">Criar Cadastro</button>
            </p>
            </form> 
    </div>