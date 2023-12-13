<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>1 Vagas</title>
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
    .textovagas{
      text-decoration: black;
    }
/*<!-- ---------------------------------botao proximo CSS ------------------------------------------->*/
      button {
      background-color: dodgerblue;
      border: none;
      margin-left: 75%;
      margin-top: 0%;
      width: 10%;
      padding: 10px;
      border-radius: 10px;
      color: white;
      font-size: 15px;

    }

    button:hover {
      background-color: deepskyblue;
      cursor: pointer;
    }
 /*<!-- --------------------------------- CSS ------------------------------------------->*/
 .footer{
  
        position: fixed;
        width: 100%;
        text-align: center;
 }
 
  </style>
  
</head>

<body>
  <!-- ---------------------------------navbar HTML parte soperior da pagina ------------------------------------------->
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="aess.png" width="30" height="30" class="d-inline-block align-top" alt="">
    AESS
  </a>
</nav>
<!-- ---------------------------------texto HTML ------------------------------------------->
<div class="container">
<form role="form" action="/empresaCNPJ/criar" method="get">
    {{ csrf_field() }}
  <img src="{{asset('site/vagas.png')}}" width="600" height="380" />
  <div class="textovagas">
    <h5>Formulario de cadastro de vagas</h5>
    <p>identificação do empregador</p>
  </div>
</div>

 <!-- ---------------------------------botao proximo HTML ------------------------------------------->
 <div class="bottonproximo">
 <a href="#"><button type="submit" class="buttonPesquisa">{{ __('Proximo') }}</button></a>
</div>
</form>
</br>
  <!-- ---------------------------------------------------------------------------->
<!-- ---------------------------------------------------------------------------->
<!-- ---------------------------------footer HTML parte inferior da pagina------------------------------------------->
<footer class="footer">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">AESS</a>
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>