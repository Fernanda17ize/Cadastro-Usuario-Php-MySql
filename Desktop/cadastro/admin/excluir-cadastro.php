<?php

require '../Config_Banco.php';
include '../src/Cadastro.php';
require '../src/Path.php';


$cadastro = new Cadastro($mysql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Cadastro($mysql);
    $artigo->remover($_POST['id']);

     //redirecionar
     path('../index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Excluir Cadastro</title>
<link rel="stylesheet" type="text/css" href="../estilo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div id="container">
    <div class="alert alert-danger" role="alert">
        <h1p>  Você realmente deseja sair do hall da fama? :( </p>
        <form method="post" action="excluir-cadastro.php">
            <p> 
                <button type="btn btn-danger"><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />Excluir</button>
            </p>
        </form>
        </div>
    </div>
</body>

</html>

