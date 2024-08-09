<?php
session_start()
?>
<!DOCTYPE html>

<body>

    <?php

// Aqui define a variavel como false
    $usuario_autenticator=false;
    // Aqui eu crio um array com o email e senha dos usuarios
        $usuarios_app=array(

            array(
            'email' => 'joaoehgay@gaymail.gay', 
            'password' => 'peidodevelha69'
        
            ),

            array(
                'email' => 'ribino05@gmail.com',
                'password' => 'minhasenhaem2024'
            )

        );
        // aqui eu crio uma repetição aonde vai verificar se o email e password que o usuario digitou é igual no nossos arrays
    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
            // caso seja igual entao ele define essa variavel como true
            $usuario_autenticator=true;
        }
    }
    // caso a variavel seja == true entao ele diz que o usuario entrou com sucesso
    if ($usuario_autenticator) {
        
        $_SESSION['autenticator'] = 'SIM';
        header('Location: home.php');
        
    }else{ // caso a variavel nao seja true, ele diz que o email e senha nao correspondem
        $_SESSION['autenticator'] = 'NAO';
        header('Location: index.php?login=erro');
        
    }

    ?>

</body>

</html>