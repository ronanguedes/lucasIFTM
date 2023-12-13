<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>4 vagas</title>
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
/* ---------------------------------tabela CSS ------------------------------------------->*/
.table{
    width: 80%;
    transform: translate(+15%, +10%);
 }
 /* ---------------------------------texto CSS ------------------------------------------->*/
 .titulocurriculo{
    text-align: center;
 }
 /* ---------------------------------texto CSS ------------------------------------------->*/  
 .bottonmais{
    position:absolute; 
    top:12%;
    left:89%;
 }
 .table{
    
    margin:0%;
    margin-bottom: 5%;
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
    <img src="{{asset('site/aess.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
    AESS
  </a>
</nav>
<!-- ---------------------------------texto titulo HTML ------------------------------------------->
<div class="containerCurriculo">
    <div class="titulo">
      <div class="titulocurriculo">
          <h1>Vagas</h1>
      </div>
    </div>
    <div class="bottonmais">
      <button type="button" class="btn btn-info">+</button>
    </div>
    <!-- ---------------------------------texto HTML -------------------------------------------> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NomeFantasia:</th>
      <th scope="col">CPF:</th>
      <th scope="col">Ações:</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empresas as $empresa)
    <tr>
      
      <td>{{ $empresa->id }}</td>
      <td>{{ $empresa->nomefantasia }}</td>
      <td>{{ $empresa->cpfcnpj }}</td>
      <td> <button type="button" name="detalhes" class="btn btn-link">detalhes</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</table>
</div>

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