<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>6 curriculo completaveis</title>
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
         .formulario {
         transform: translate(+20%, +3%);
         width: 70%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         background-color: #fff;
         /*mexer com o formulario tamanho diagonal*/
         padding: 1rem;
         border: 1px solid #000;
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
         margin: 10px 0;
         /*tamanho das label*/
         padding: 12px 85px;
         border: none;
         border-radius: 10px;
         box-shadow: 1px 1px 6px #0000001c;
         /*fonte dentro da label*/
         font-size: 13px;
         }
         .campo-nome input:hover {
         background-color: #eeeeee75;
         }
         .campo-nome input:focus-visible {
         outline: 1px solid deepskyblue;
         }
         .campo-nome label,
         .titulo-genero h6 {
         /*fonte da nome da label*/
         font-size: 13px;
         font-weight: 600;
         color: #000000c0;
         /*-----------------------*/
         margin: 10px 0;
         /*tamanho das label*/
         padding: 12px 100px;
         /*muda a distancia das label*/
         border: none;
         border-radius: 10px;
         box-shadow: 1px 1px 6px #0000001c;
         /*fonte dentro da label*/
         font-size: 13px;
         }
         .campo-nome input::placeholder {
         color: #000000be;
         }
         /*------------------------------------------------------------------------------*/
         /*---------------------------------CSS continuar botton---------------------------------------------*/
         .finalizar-button button {
         width: 10%;
         margin-top: 2px;
         border: none;
         background-color: deepskyblue;
         padding: 6px;
         border-radius: 5px;
         cursor: pointer;
         }
         .finalizar-button button:hover {
         background-color: deepskyblue;
         }
         .finalizar-button button a {
         text-decoration: none;
         font-size: 9px;
         font-weight: 500;
         color: #fff;
         }
         /*<!-- --------------------------------- CSS editar botton ------------------------------------------->*/
         .Editar-button button {
         width: 30%;
         margin-left: 55%;
         transform: translate(+50%, +0%);
         border: none;
         background-color: deepskyblue;
         padding: 12px;
         border-radius: 5px;
         cursor: pointer;
         }
         .Editar-button button:hover {
         background-color: deepskyblue;
         }
         .Editar-button button a {
         text-decoration: none;
         font-size: 0.93rem;
         font-weight: 500;
         color: #fff;
         }
         /* ---------------------------------tabela CSS ------------------------------------------->*/
         .table{
         margin-bottom: 25%;
         width: 80%;
         transform: translate(+15%, +10%);
         }
         /* ---------------------------------texto CSS ------------------------------------------->*/
         .containerCurriculo{
         margin-top: 3%;
         text-align: center;
         }
         /* ---------------------------------texto CSS ------------------------------------------->*/
         .containerDadosvagas{
         text-align: center;
         }
         /*<!-- --------------------------------- CSS ------------------------------------------->*/
         .footer {
         width: 100%;
         text-align: center;
         position: absolute;
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
      <div class="containerDadosvagas">
         <div class="titulovaga">
            <div class="titulodadosvaga">
               <h1>Dados da vaga</h1>
            </div>
         </div>
      </div>
      <!-- ---------------------------------texto HTML -------------------------------------------> 
      <!-- *********************************formulario****************************** -->
      
      <div class="formulario">
         <form action="#">
            <!-- *************************************************************** -->
            <div class="campo-cadastro">
               <div class="campo-nome">
                  <label for="vagas">Vagas:motorista</label>
                  <!-- <input id="nomeempresa" type="text" name="nomefantasia" value="" placeholder="Digite nome da empresa" required>-->
               </div>
               <div class="campo-nome">
                  <label for="quantidadeVagas">Quantidade de Vagas:1</label>
                  <!-- <input id="CNPJ" type="text" name="cpfcnpj" value="" placeholder="Digite o CNPJ" required>-->
                  <!-- <input id="id" type="hidden" name="id" value=""  required>-->
               </div>
               <div class="campo-nome">
                  <label for="necessarioExperiencia">Necessario Experiencia: Sim</label>
                  <!--   <input id="email" type="email" name="email" value="" placeholder="Digite seu e-mail" required>-->
               </div>
               <div class="campo-nome">
                  <label for="campoCTPS">CTPS: Não</label>
                  <!--   <input id="numero" type="tel" name="fone" value="" placeholder="(xx) xxxx-xxxx" required>-->
               </div>
               <div class="campo-nome">
                  <label for="necessarioCNH">Necessario CNH: Sim</label>
                  <!--  <input id="endereco" type="text" name="endereco" value=""placeholder="Digite o Endereço" required>-->
               </div>
               <div class="campo-nome">
                  <label for="cnh">CNH: A</label>
                  <!-- <input id="numero" type="text" name="numero" value=""placeholder="Digite a numero " required>-->
               </div>
               <div class="campo-nome">
                  <label for="escolaridade">Escolaridade: Ensino Medio</label>
                  <!-- <input id="bairro" type="text" name="Escolaridade" value=""placeholder="Escolaridade " required>-->
               </div>
               <!-- <div class="campo-nome">
                  <label for="Telefone">Celular / Whatsapp: (xx)xxxxxxxx</label>
                  <!- <input id="cidade" type="text" name="cidade" value=""placeholder="Digite a Cidade " required>
                  </div> -->
            </div>
            <!-- *************************************************************** -->
            <!-- *************************************************************** -->
            <!--<div class="finalizar-button">
               <button><a href="#">finalizar</a> </button> 
               
               </div> -->
            <!-- *************************************************************** -->
           <!-- <div class="Editar-button">
               <button><a href="#">Editar</a> </button>
            </div>-->
         </form>
      </div> 
      
      <!-- *************************************************************** -->
      <!-- ---------------------------------texto titulo HTML ------------------------------------------->
      <div class="containerCurriculo">
         <div class="titulo">
            <div class="titulocurriculo">
               <h1>Curriculo Compativeis</h1>
            </div>
         </div>
      </div>
      <!-- ---------------------------------texto HTML -------------------------------------------> 
      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Nome:</th>
               <th scope="col">CNH:</th>
               <th scope="col">Idade:</th>
               <th scope="col">Escolaridade:</th>
               <th scope="col">Atualização:</th>
               <th scope="col">Ações:</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">1</th>
               <td>joão</td>
               <td>25</td>
               <td> <button type="button" class="btn btn-link">detalhes</button></td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>jose</td>
               <td>42</td>
               <td> <button type="button" class="btn btn-link">detalhes</button></td>
            </tr>
            <tr>
               <th scope="row">3</th>
               <td>maria</td>
               <td>36</td>
               <td> <button type="button" class="btn btn-link">detalhes</button></td>
            </tr>
         </tbody>
      </table>
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