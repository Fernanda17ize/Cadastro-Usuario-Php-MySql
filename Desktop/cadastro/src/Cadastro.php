<?php


class Cadastro

{
    private $mysql;
        public function __construct(mysqli $mysql) 
            {
                $this->mysql = $mysql;
            }
  
            public function adicionar(string $nome): void
            {
               $insereCadastro = $this->mysql->prepare('INSERT INTO cadastro (nome) VALUES (?);');
               $insereCadastro->bind_param('s', $nome);
               $insereCadastro->execute();
            }

            public function remover(string $id): void
            {
                $removerCadastro = $this->mysql->prepare('DELETE FROM cadastro WHERE id = ?');
                $removerCadastro->bind_param('s',$id);
                $removerCadastro->execute();
            }

            public function exibirTodos(): array 
            {
            $resultado = $this->mysql->query('SELECT id, nome, atualizacao FROM cadastro');
            $cadastros = $resultado->fetch_all(MYSQLI_ASSOC);
             return $cadastros;
            }

            public function editarCadastros(string $id): array
            {
                $trocarCadastro = $this->mysql->prepare('SELECT id, nome, atualizacao FROM cadastro WHERE id =?');
                $trocarCadastro->bind_param('s',$id);
                $trocarCadastro->execute();
                $cadastro = $trocarCadastro->get_result()->fetch_assoc();
            return $cadastro;
            }

            public function salvarEdicao(string $id, string $nome): void
            {
                $editaCadastro = $this->mysql->prepare('UPDATE cadastro SET nome = ? WHERE id = ?');
                $editaCadastro->bind_param('ss', $nome, $id);
                $editaCadastro->execute();
            }

}

?>

