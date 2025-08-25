<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
</head>
<body style="font-family: sans-serif; max-width: 600px; margin: 50px auto; background-color: #f0f2f5;">
    <div style="background-color: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h1>Formulário de Cadastro</h1>
        <form action="cadastrar.php" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #ccc; box-sizing: border-box;">
            
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #ccc; box-sizing: border-box;">
            
            <button type="submit" style="width: 100%; padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1.1rem;">Cadastrar</button>
        </form>
        <a href="visualizar.php" style="display: block; margin-top: 20px; text-align: center; font-size: 1.2rem;">Ver Pessoas Cadastradas</a>
    </div>
</body>
</html>