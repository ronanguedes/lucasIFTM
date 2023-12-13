<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>3 dadosEmpresa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- ---------------------------------texto CSS cabeçalho ------------------------------------------->
  <style>
    .row {
      display: flex;
      display: block;
      text-align: center;
    }
 /* ---------------------------------texto CSS ------------------------------------------->*/

/* *********************************************************** */
/* O ponto (.) é usado para selecionar elementos de uma classe específica*/
/* *********************************************************** */
/* referencia da classe conteiner */

.formulario {
    transform: translate(+20%, +0%);
    width: 70%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 3rem;
}

.inicio-formulario {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}
.inicio-formulario h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: deepskyblue;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}
/* ---------------------------------botton------------------------------------------->*/
.empresateste{
       width: 100%;
      display: flex;
      flex-direction: column;
}
/* --------------------------------- ------------------------------------------->*/


/*.empresateste {
   display: flex;
   flex-direction: column;
   margin-bottom: 0.1rem;
}

.empresateste input {
   margin: 0.6rem 0;
   padding: 0.8rem 0.2rem;
   border: none;
   border-radius: 10px;
   box-shadow: 1px 1px 6px #0000001c;
   font-size: 0.8rem;
}

.empresateste input:hover {
   background-color: #eeeeee75;
}

.empresateste input:focus-visible {
   outline: 1px solid deepskyblue;
}

.empresateste label,
.titulo-genero h6 {
   font-size: 0.75rem;
   font-weight: 600;
   color: #000000c0;
}

.empresateste input::placeholder {
   color: #000000be;
}*/
/* --------------------------------- ------------------------------------------->*/
.campo-cadastro {
   
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.campo-nome {
    display: flex;
    flex-direction: column;
    margin-bottom: 0.1rem;
}

.campo-nome input {
    margin: 0.6rem 0;
    padding: 0.8rem 6.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    font-size: 0.8rem;
}

.campo-nome input:hover {
    background-color: #eeeeee75;
}

.campo-nome input:focus-visible {
    outline: 1px solid deepskyblue;
}

.campo-nome label,
.titulo-genero h6 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
}

.campo-nome input::placeholder {
    color: #000000be;
}
/*-------------------------------texto central -----------------------------------------------*/
.containerDadosempresa{
    text-align: center;
    margin-top: 5%;
 }
/*---------------------------------CSS continuar botton---------------------------------------------*/

.editar-button button {
    width: 30%;
    margin-top: 50px;
    border: none;
    background-color: deepskyblue;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
   
}
.editar-button button:hover {
    background-color: deepskyblue;
}

.editar-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
/*<!-- --------------------------------- CSS editar botton ------------------------------------------->*/
.continuar-button button {
    width: 30%;
    margin-top: 5%;
    margin-left: 55%;
    transform: translate(+50%, -99%);
    border: none;
    background-color: deepskyblue;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
   
}
.continuar-button button:hover {
    background-color: deepskyblue;
}

.continuar-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
/* *********************************************************** */
/* O hashtag (#) é usado para selecionar um elemento com um ID específico*/
/* *********************************************************** */
  
 /*<!-- --------------------------------- CSS rodape ------------------------------------------->*/
 .footer{
  
      position: fixed;
      position: absolute;
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
<!-- ---------------------------------texto HTML ------------------------------------------->
 <!-- ---------------------------------texto titulo HTML ------------------------------------------->
<div class="containerDadosempresa">
  <div class="tituloempresa">
    <div class="titulodadosempresa">
        <h1>Dados da Empresa</h1>
    </div>
  </div>
</div>
<!-- ---------------------------------texto HTML -------------------------------------------> 
  <!-- *********************************formulario****************************** -->
  <div class="formulario">
    <form role="form" action="/empresa/salvar" method="post">
    {{ csrf_field() }}
          <!-- *************************************************************** -->
          
          <div class="campo-cadastro">
            <div class="campo-nome">
              <div class="empresateste"> 
                <label for="tx">Nome Fantasia</label>
                <input id="nomeempresa" type="text" name="nomefantasia" value="{{old('nomefantasia',$buscarempresa[0]->nomefantasia ?? '')}}" placeholder="Digite nome da empresa" required>
            </div>
          </div>
            <div class="campo-nome">
              <label for="CNPJ">CNPJ</label>
              <input id="CNPJ" type="text" name="cpfcnpj" value="{{old('cpjcnpj',$buscarempresa[0]->cpfcnpj ?? '')}}" placeholder="Digite o CNPJ" required>
              <input id="id" type="hidden" name="id" value="{{old('id',$buscarempresa[0]->id ?? '')}}"  required>

              </div>

              <div class="campo-nome">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" value="{{old('email',$buscarempresa[0]->email ?? '')}}" placeholder="Digite seu e-mail" required>
              </div>

              <div class="campo-nome">
                  <label for="numero">Celular / whatsapp</label>
                  <input id="numero" type="tel" name="fone" value="{{old('fone',$buscarempresa[0]->fone ?? '')}}" placeholder="(xx) xxxx-xxxx" required>
              </div>
              
            <div class="campo-nome">
              <label for="endereco">Endereço</label>
              <input id="endereco" type="text" name="endereco" value="{{old('endereco',$buscarempresa[0]->endereco ?? '')}}"placeholder="Digite o Endereço" required>
          </div>

        <div class="campo-nome">
          <label for="numero">Numero:</label>
          <input id="numero" type="text" name="numero" value="{{old('numero',$buscarempresa[0]->numero ?? '')}}"placeholder="Digite a numero " required>
      </div>
      <div class="campo-nome">
        <label for="bairro">Bairro:</label>
        <input id="bairro" type="text" name="bairro" value="{{old('bairro',$buscarempresa[0]->bairro ?? '')}}"placeholder="Digite a Bairro " required>
    </div>
      <div class="campo-nome">
        <label for="cidade">Cidade:</label>
        <input id="cidade" type="text" name="cidade" value="{{old('cidade',$buscarempresa[0]->cidade ?? '')}}"placeholder="Digite a Cidade " required>
    </div>
          </div>
          <!-- *************************************************************** -->
         
          <!-- *************************************************************** -->
          <div class="continuar-button">
          <button type="submit" class="btn btn-primary">
                                        {{ __('Atualizar') }}
                                    </button>
          </div>
      </form>
  </div>


<!-- *************************************************************** -->
  
<!-- --------------------------------------------------------------------------------------->
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