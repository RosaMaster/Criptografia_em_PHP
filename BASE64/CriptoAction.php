<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIPTOGRAFIA BASE64</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class=container>
        <form>
            <h3><b>MENSAGEM CRIPTOGRAFADA COM SUCESSO!!!</b></h3>
            <hr>
            <h5>
            <?php
            $message = $_POST['Message'];
            $codificado = base64_encode($message);
            $cripto = $_POST['Decode'];
            $decodificado = base64_decode($cripto);
            echo "Resultado do texto codificado usando BASE64: <br>";
            echo "<b><br>$codificado</b><br><br>";
            echo "Resultado do texto decodificação usando BASE64: <br>";
            echo "<b><br>$decodificado</b><br>";
            ?>
            </h5>
        </form>
        <div class="area-do-botao">
                <button type=submit id="botao-return"><a target="_blank" href="index.php">VOLTAR</a></button>
            </div>
        <footer>
            <p>Powered by <a title="Eduardo.Rosa" target="_blank" class="w3-hover-text-pink"><b>RosaMaster</b></a></p>
        </footer>
    </div>
</body>
</html>