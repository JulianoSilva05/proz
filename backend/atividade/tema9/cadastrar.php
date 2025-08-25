<?php
// 1. DADOS DE CONEXÃO
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aula_conexao";

// 2. REALIZAR A CONEXÃO
$conexao = new mysqli($host, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// 3. RECEBER OS DADOS DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];

// 4. CRIAR O COMANDO SQL PARA INSERIR OS DADOS
$sql = "INSERT INTO pessoas (nome, email) VALUES ('$nome', '$email')";

// 5. EXECUTAR O COMANDO E VERIFICAR
if ($conexao->query($sql) === TRUE) {
    echo "<h1>Pessoa cadastrada com sucesso!</h1>";
    // Redireciona para o formulário após 2 segundos
    header("refresh:2;url=formulario.php");
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

// 6. FECHAR A CONEXÃO
$conexao->close();
?>