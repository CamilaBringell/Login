<?php

    $usuarioCadastrado = "Camila";
    $senhaCadastrada = "mila0000*";

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if(($usuario == $usuarioCadastrado) && ($senha == $senhaCadastrada)){
        header("location: inicio.php");
    }else{
        header("location: login.php?msg=erro");
    }

    //echo "<p> <h1>Usuário: ".$usuario. "</h1>";
    //echo "<p> <h1>Senha: ".$senha. "</h1>";
?>