
<?php function testelogin() { ?>
    <?php
        if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
             <div class='text-danger'>
                 Usuario ou senha invalidos(as).
            </div>
    <?php }?>
<?php } ?> 

<?php function startSession() {

    include 'valida_login.php';
    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location: index.php?login=erro2');
      }    
}
?>

<?php function protegerPaginas() { ?>
    <?php
        if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
             <div class='text-danger'>
                 Faça login antes de acessar minhas paginas, safado!
            </div>
    <?php }?>
<?php } ?> 



