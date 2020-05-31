
<?php 

require 'Config_Banco.php';
include 'src/Cadastro.php';

$cadastro = new Cadastro($mysql);
$cadastros = $cadastro->exibirTodos();

?>


<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
            <title>Cadastro</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="estilo.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>

<body>


<!--- Adicionar Entrada de Dados ---> 

<body>

<!--- Botão Adicionar Entrada de Dados ---> 
<div id="container">
        <p>      
        <div class="alert alert-info" role="alert"> Cansado do Anonimato? Só para as Celebs. Realize seu cadastro  <a href="admin/adicionar-cadastro.php" class="alert-link">aqui</a> - é fácil!. 
        <p>Últimas chances!</p>
        </div>      
        </p>
</div>
 
<!--- Output da Entrada --->        
<?php foreach($cadastros as $cadastro1): ?>
        <div id="container-pontilhado">  
            <p><h6>Nome Completo:</h6>
                <?php echo $cadastro1['nome'] ?></p>
        
      <p> <small>Data de Cadastro:
            <?php echo $cadastro1['atualizacao'] ?></small></p>
    <nav>
        <button type="botao"> <a href="admin/editar-cadastro.php?id=<?php echo $cadastro1['id']; ?>">Editar</a></button>
        <button type="botao"> <a href="admin/excluir-cadastro.php?id=<?php echo $cadastro1['id']; ?>">Excluir</a></button>
    </nav>   
        </div> 
        <?php endforeach; ?>  
        
  
</body>

</html>