<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>2 CNPJ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- ---------------------------------texto CSS ------------------------------------------->
    <style>
    .row {
        display: flex;
        display: block;
        text-align: center;
    }

    /* ---------------------------------texto CSS ------------------------------------------->*/
    .container {
        text-align: center;
        width: 50%;
        right: 50%;
    }

    /*<!-- ---------------------------------botao proximo CSS ------------------------------------------->*/
    .btn {
        margin-left: 75%;
        margin-top: 5%;
        width: 10%;
        padding: 10px;
    }

    /*<!-- --------------------------------- CSS ------------------------------------------->*/

    /* *********************************************************** */
    /* body: e uma regra de estilo aplicada para toda a pagina */
    /* *********************************************************** */
    /*body{
    
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, pink, yellow);
}*/
    /* *********************************************************** */
    /* O ponto (.) é usado para selecionar elementos de uma classe específica*/
    /* *********************************************************** */
    /* referencia da classe conteiner */
    .cadastreaqui {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }

    .telacentral {
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;
    }

    input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }

    /*<!-- --------------------------------- CSS botao------------------------------------------->*/
    button {
        margin-top: 4%;
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;

    }

    button:hover {
        background-color: deepskyblue;
        cursor: pointer;
    }

    /*<!-- --------------------------------- CSS buscar digitar------------------------------------------->*/
    .campobusca {
        margin-top: 4%;
        width: 100%;
    }

    /*<!-- --------------------------------- CSS ------------------------------------------->*/
    .rodape {
        bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;
    }

    /*<!-- --------------------------------- CSS ------------------------------------------->*/
    </style>
</head>

<body>
    <!-- ---------------------------------navbar HTML parte soperior da pagina ------------------------------------------->
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{asset('site/aess.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            AESS
        </a>
    </nav>
    <!-- ---------------------------------CNPJ HTML ------------------------------------------->
    <form role="form" action="/empresaCNPJ/buscar" method="POST">
    @csrf
    <div class="telacentral">
        <h2>Digite o CNPJ</h2>
        <div class="campobusca">
            <input id="CNPJ" type="text" name="CNPJ" placeholder="Consultar o CNPJ" required>
        </div>
        <!-- Botão de pesquisa -->
        <div class="bottonbusca">
            <button type="submit" class="buttonPesquisa">Buscar</button>
        </div>
    </div>
</form>


    <!-- ---------------------------------footer HTML parte inferior da pagina------------------------------------------->
    <div class="rodape">
        <footer class="footer">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">AESS</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- ---------------------------------------------------------------------------->
</body>

</html>