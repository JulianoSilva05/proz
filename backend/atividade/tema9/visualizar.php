<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Pessoas Cadastradas</title>
</head>

<body style="font-family: sans-serif; max-width: 800px; margin: 50px auto; background-color: #f0f2f5;">
    <div class="container">
        <h1>Lista de Pessoas Cadastradas</h1>
        <table class="tabela-dados">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexao = new mysqli("localhost", "root", "", "aula_conexao");
                if ($conexao->connect_error) {
                    die("Falha na conexão: " . $conexao->connect_error);
                }

                $sql = "SELECT id, nome, email FROM pessoas";
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($linha = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($linha["id"]) . "</td>";
                        echo "<td>" . htmlspecialchars($linha["nome"]) . "</td>";
                        echo "<td>" . htmlspecialchars($linha["email"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhuma pessoa cadastrada.</td></tr>";
                }
                $conexao->close();
                ?>
            </tbody>
        </table>
        <a href="formulario.php" class="link-voltar" style="display: block; margin-top: 20px; text-align: center; font-size: 1.2rem;">Voltar para o Cadastro</a>
    </div>
</body>

</html>