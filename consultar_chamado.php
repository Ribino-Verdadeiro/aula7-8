<?php 
  require_once "V.php";
?>

<?php 

  $chamados=array(); // aqui criamos uma variavel "chamados" que é um array VAZIO

  $arquivo = fopen('arquivo.txt', 'r'); // aqui abrimos o arquivo.txt e lemos ele "r"

  while(!feof($arquivo)){ // aqui criamos um laço de repetição aonde vai ler até o final da variavel $arquivo

    $registro=fgets($arquivo); // aqui criamos uma outra variavel $registro para armazenar o que o fgets ler do $arquivo, vale lembrar que o fgets lê linha por linha
    $chamados[]=$registro; // aqui falamos que vamos salvar a variavel $registro no array $chamados

  }

?>


<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado) { // aqui criamos um laço de repetição para a nossa variavel $chamados, colocamos um apelido que é o chamado para cada item da variavel $chamados?>

                <?php
                  $chamado_dados=explode('#', $chamado); // aqui dizemos que cada item do $chamado está separado com #

                  if(count($chamado_dados) < 3 ){ // aqui caso a variavel $chamado_dados ter menos do que 3 itens entao apenas vai continuar e nao dar erro
                    continue;
                  }
                    // aqui para baixo apenas colocamos o resultado do $chamado_dados em seus respectivos lugares, ou seja, o numero 0 do array é o titulo, entao colocamos para mostrar la e assim em diante
                ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <h5 class="card-title"> <?=$chamado_dados[0]?> </h5> 
                  <h6 class="card-subtitle mb-2 text-muted"> <?=$chamado_dados[1]?> </h6>
                  <p class="card-text"> <?=$chamado_dados[2]?> </p>

                </div>
              </div>

              <?php } ?>


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>