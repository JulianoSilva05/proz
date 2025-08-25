<?php
// Parâmetros para a conexão local
$host_local = "108.167.151.55";
$usuario_local = "jul33718_aluno";
$senha_local = "Aluno@2025";
$banco_local = "jul33718_bdant";

// 1. Tenta criar uma nova conexão com o banco
$conexao_local = new mysqli($host_local, $usuario_local, $senha_local, $banco_local);

// 2. Verifica se ocorreu algum erro na tentativa de conexão
if ($conexao_local->connect_error) {
    // Se houve um erro, interrompe o script e exibe o erro
    die("Falha na conexão: " . $conexao_local->connect_error);
}

// 3. Se o script chegou até aqui, a conexão foi um sucesso!
echo "Conectado ao banco de dados local com sucesso!";

// 4. Fecha a conexão para liberar recursos do servidor
$conexao_local->close();
?>