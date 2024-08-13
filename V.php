<?php 
session_start();

    if (!isset($_SESSION['autenticator']) || $_SESSION['autenticator'] != 'SIM') {
      header('Location: index.php?login=erro2');
      }   
      
?>