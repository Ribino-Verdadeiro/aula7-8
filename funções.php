
<?php function testelogin() { ?>
    <?php
        if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
             <div class='text-danger'>
                 Usuario ou senha invalidos(as).
            </div>
    <?php }?>
<?php } ?> 


<?php function startSession() {
    include('valida_login.php');
    if(!isset($_SESSION['autenticador']) || $_SESSION['autenticador'] != 'SIM') {
        header('Location: index.php?login=erro2');
      }    
} ?>


<?php function protegerPaginas() { ?>
    <?php
        if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
             <div class='text-danger'>
                 Faça login antes de acessar minhas paginas, safado!
            </div>
    <?php }?>
<?php } ?> 

<?php function cabeçario() { ?>

             
    <div class="container" style="background-color: pink;" >

        <div class="row">

          <div class="col-sm">
            <img src="Atelie_Aline21.png" height="100" width="100">
          </div>

          <div class="col-sm">
            
            <nav class="navbar">
                <form class="form-inline mt-5" style="display: flex; position: relative; top: -25px;">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
              </nav>

          </div>

          <div class="col-sm" style="display: flex; position: relative; top: 32px;">
            
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <img src="coracao.png" width="30" height="30">
                  </div>
                  <div class="col-sm">
                    <img src="carrinho.png" width="30" height="30">
                  </div>
                  <div class="col-sm">
                    <img src="menu.png" width="30" height="30">
                  </div>
                </div>
              </div>

          </div>

        </div>

      </div>

<?php } ?>

