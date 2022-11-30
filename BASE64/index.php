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
        <!-- FORM -->
        <form id="form1"name="form1" method="post" action="CriptoAction.php">
            <h1><b>CRIPTOGRAFIA BASE64</b></h1>
            <br>
            <div class=area-message>
                <input type=text id=message name=Message placeholder=Mensagem>
            </div><br>
            <div class=area-decode>
                <input type=text id=decode name=Decode placeholder=Descriptografar>
            </div><br>
            <div class="area-do-botao">
                <button type=submit id="botao-enviar">ENVIAR</button>
            </div>
        </form>

        <br><br><br>
        <!-- FOOTER -->
        <footer>
            <p>Powered by <a title="Eduardo.Rosa" target="_blank" class="w3-hover-text-pink"><b>RosaMaster</b></a></p>
        </footer>
    </div>
</body>
</html>