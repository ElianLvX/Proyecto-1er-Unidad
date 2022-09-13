<?php

// Datos Ingresados desde Teclado
$usuario = @$_POST['usuario'];
$passq = @$_POST['pass'];

// Variables para validar

// ? Administrador
$userAdmin = "asd";
$passAdmin = "123";

// ? Usuario o Cliente
$userCliente = "cliente";
$passCliente = "369";

if($usuario === $userAdmin){
    // Administrador
    if($passq === $passAdmin){
        // * Enviando a dashbord.php
        header("location:dashbord.php");
    }else {
        echo 'Contraseña Incorrecta';
        include("index.html");
    }

} else if($usuario === $userCliente) {
    echo 'Usuario Cliente Reconosido'.'<br>';
    if($passq === $passCliente){
        echo 'Iniciando Sesion Cliente';
        // * Enviando a tienda
        header("location:homeCliente.php");
    } else {
        echo 'Contraseña Incorrecta';
        include("index.html");
    }
} else {
    echo 'Cliente No registrado';
    include("index.html");
}

?>

