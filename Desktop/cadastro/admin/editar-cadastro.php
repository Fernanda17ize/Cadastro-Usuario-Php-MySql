
<?php
require '../Config_Banco.php';
include '../src/Cadastro.php';
require '../src/Path.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastro = new Cadastro($mysql);
    $cadastro->salvarEdicao($_POST['id'], $_POST['nome']);

     //redirecionar
     path('../index.php');
}

$cadastro = new Cadastro($mysql);
$cad = $cadastro->editarCadastros($_GET['id']);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Editar Cadastro</title>
<link rel="stylesheet" type="text/css" href="../estilo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div id="container-pontilhado">
        <h4>Oops. Nomes parecidos. Edite seu cadastro:</h4>
        <form action="editar-cadastro.php" method="post">
            <p>
              
                <input class="campo-form" type="text" name="nome" id="id" value="<?php echo $cad['nome']; ?>" />
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $cad['id']; ?>" />
            </p>
            <p>
                <button class="btn btn-outline-primary">Salvar</button>
            </p>
        </form>
    </div>
</body>

</html>



