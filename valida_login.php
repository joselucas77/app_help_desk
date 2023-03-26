<?php 
    //Protegendo páginas restritas com SESSION
    session_start();

    //Usuários do sistema
    $usuarios = [
        ['email' => 'adm@teste.com', 'senha' => '123456'],
        ['email' => 'user@teste.com', 'senha' => 'abcd']
    ];

    //variável que verifica se a aautenticação foi realizada
    $usuario_autenticado = false;

    //Validação de ususarios
    foreach($usuarios as $user) {
        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado.';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NÂO';
        header('Location: index.php?login=erro');
    }


?>