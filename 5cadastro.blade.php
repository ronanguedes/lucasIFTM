<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>5 cadastro</title>
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
         padding: 3rem;
         border: 1px solid #000;
         }
         /*------------------------------------------------------------------------------*/
         .campotexto {
         width: 100%;
         padding-left: 20px;
         display: flex;
         flex-direction: column;
         }
         /*------------------------------------------------------------------------------*/
         .inputcheckbox{  
         margin-left: 3%;
         }
         /*------------------------------------------------------------------------------*/
         .campoCNH {
         margin-left: 55%;
         transform: translate(+45%, -120%);
         }
         /*---------------------------------CSS continuar botton---------------------------------------------*/
         .editar-button {
         width: 30%;
         margin-top: 1;
         }
         /* ---------------------------------texto CSS ------------------------------------------->*/
         .containerDadosvagas {
         text-align: center;
         }
         /*<!-- --------------------------------- CSS editar botton ------------------------------------------->*/
         .continuar-button button {
         width: 20%;
         margin-left: 55%;
         transform: translate(+25%, -119%);
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
         /*<!-- --------------------------------- CSS ------------------------------------------->*/
         .footer {
         position: fixed;
         position: absolute;
         width: 100%;
         text-align: center;  
         }
      </style>
      <script>
         $(function(){
           $("#cnhSim").change(function(){
             document.getElementById('cnh').style.display = "";
           });
           $("#cnhNao").change(function(){
             document.getElementById('cnh').style.display = "none";
             document.getElementById('cnhEscolhido').value = "Não possui nao";
           });
         });
         
         
          
         
      </script>
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
         <form role="form" action="/vagas/salvar" method="post">
            {{ csrf_field() }}
            <!-- *************************************************************** -->
            <div class="campo-cadastro">
               <div class="campo-nome">
                  <div id="checkboxtexto">
                     <label for="tipoConstracao">
                        <legend>Tipo de Contratação:</legend>
                     </label>
                     <INPUT class="inputcheckbox" type="RADIO" NAME="tipoConstracao" VALUE="Permanente" required> Permanente
                     <INPUT class="inputcheckbox" type="RADIO" NAME="tipoConstracao" VALUE="Temporária, por dias." required> Temporária, por dias.
                     <INPUT class="inputcheckbox" type="RADIO" NAME="tipoConstracao" VALUE="Estágio" required> Estágio
                     <INPUT class="inputcheckbox" type="RADIO" NAME="tipoConstracao" VALUE="Aprendiz" required> Aprendiz
                  </div>
               </div>
               <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
               <div class="campo-nome">
                  <div class="campotexto">
                     <label for="vaga">
                        <legend>Vaga</legend>
                     </label>
                     <input type="text" class="form-control" NAME="vaga"VALUE="{{old('vaga',$cadastrovaga[0]->vaga ?? '')}}" placeholder="Vagas" required>
                     <input id="empresaId" type="hidden" name="empresaId" value="{{old('id',$id ?? '')}}"  required>
                  </div>
               </div>
               <div class="campo-nome">
                  <div class="campotexto">
                     <label for="exampleFormContro">
                        <legend>Quantidades vagas</legend>
                     </label>
                     <input type="number" class="form-control" NAME="quantidadeVaga" VALUE="{{old('vaga',$cadastrovaga[0]->vaga ?? '')}}" placeholder="Digite quantidade de vagas" required>
                  </div>
               </div>
               <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
               <div class="campo-nome">
                  <div class="botaocheck">
                     <label for="necessiriaExper" name="necessidadeprof">Necessário ter experiência profissional:</label>
                     <INPUT class="inputcheckbox" type="RADIO" NAME="necessiriaExper" VALUE="Sim" required>
                     Sim
                     <INPUT class="inputcheckbox" type="RADIO" NAME="necessiriaExper" VALUE="Nao" required>
                     Não
                  </div>
                  <div class="botaocheck">
                     <label for="experienciaComprovadatrab" name="carteiracomp">Comprovada em carteira:</label>
                     <INPUT class="inputcheckbox" type="RADIO" NAME="experienciaComprovadatrab" VALUE="Sim" required>
                     Sim
                     <INPUT class="inputcheckbox" type="RADIO" NAME="experienciaComprovadatrab" VALUE="Nao" required>
                     Não
                  </div>
               </div>
               <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
               <div class="campo-nome">
                  <legend> Escolaridade: </legend>
                  <div class="campotexto">
                     <select class="form-control" name="escolaridade" required>
                        <option>Não exige escolaridade</option>
                        <option>Basico</option>
                        <option>Fundamental</option>
                        <option>Medio</option>
                        <option>Superior</option>
                        <option>outros (Definir no campo observação)</option>
                     </select>
                  </div>
               </div>
               <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
               <div class="campo-nome">
                  <div class="botaocheck">
                     <label for="precisaCnh"> Precisa Carteira Habilitação: </label>
                     <INPUT class="inputcheckbox" type="RADIO" NAME="precisaCnh" id="cnhSim" VALUE="Sim" required>
                     Sim
                     <INPUT class="inputcheckbox" type="RADIO" NAME="precisaCnh" id="cnhNao" VALUE="Nao" required>
                     Não
                  </div>
               </div>
               <div class="campo-nome">
                  <div class="campoCNH" style="display:none" id="cnh">
                     CNH: 
                     <select name="categoriaCnh" id="cnhEscolhido">
                        <option value="Não possui">Não possui</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="AC">AC</option>
                        <option value="AD">AD</option>
                        <option value="AE">AE</option>
                     </select>
                  </div>
               </div>
               <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
               <div class="campo-nome">
                  <div class="botaocheck">
                     <legend>Exigências para o trabalho: </legend>
                     <div class="campo-nome">
                        <div class="botaocheck">
                           <label for="disponibilidadeViagem">Disponibilidade viagens:</label>
                           <INPUT class="inputcheckbox" type="RADIO" NAME="disponibilidadeViagem" VALUE="Sim" required>
                           Sim
                           <INPUT class="inputcheckbox" type="RADIO" NAME="disponibilidadeViagem" VALUE="Nao" required>
                           Não
                        </div>
                     </div>
                     <div class="campo-nome">
                        <div class="botaocheck">
                           <label for="dormiTrabalho">Dormi no local de trabalho:</label>
                           <INPUT class="inputcheckbox" type="RADIO" NAME="dormiTrabalho" VALUE="Sim" required>
                           Sim
                           <INPUT class="inputcheckbox" type="RADIO" NAME="dormiTrabalho" VALUE="Nao" required>
                           Não
                        </div>
                     </div>
                     <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
                     <div class="campo-nome">
                        <legend> Salário: </legend>
                        <div class="campotexto">
                           <textarea name="salario" cols="30" rows="3" placeholder="Favor especificar o salário integral:" required></textarea>
                        </div>
                     </div>
                     <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
                     <div class="campo-nome">
                        <legend> Benefícios oferecidos pela empresa: </legend>
                        <div class="campotexto">
                           <textarea name="beneficioFornecidoEmpresa" cols="30" rows="3"placeholder="Beneficíos:"></textarea>
                        </div>
                     </div>
                     <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
                     <div class="campo-nome">
                        <div class="campotexto">
                           <legend> Observações: </legend>
                           <textarea name="observacao" cols="30" rows="3"placeholder="Descreva as Observações:"></textarea>
                        </div>
                     </div>
                     <LEGEND> ---------------------------------------------------------------------------------------</LEGEND>
                     <div class="textoformulario">
                        <h4>Trabalha com deficiênte</h4>
                     </div>
                     <!-- *************************************************************** -->
                     <div class="editar-button">
                        <div class="botaockeck">
                           <label for="entrevistaSine">Deseja realizar as entrevistas no Sine:</label>
                           <INPUT class="inputcheckbox" type="RADIO" NAME="entrevistaSine" VALUE="Sim" required>
                           Sim
                           <INPUT class="inputcheckbox" type="RADIO" NAME="entrevistaSine" VALUE="Nao" required>
                           Não
                        </div>
                     </div>
                  </div>
               </div>
               <!-- *************************************************************** -->
               <div class="continuar-button">
                  <button type="submit" class="btn btn-primary">{{ __('Salvar') }}</button>
               </div>
            </div>
         </form>
      </div>
      <!-- *************************************************************** -->
      <!-- ---------------------------------footer HTML parte inferior da pagina------------------------------------------->
      </br>
      </br>
      <footer class="footer">
         <div id="fundo" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">AESS</a>
         </div>
         <!-- Copyright -->
      </footer>
      
   </body>
</html>