<?php
session_start();
require_once 'config.php';
require_once 'classes/usuarios.class.php';
require_once 'classes/documentos.class.php';

if(!isset($_SESSION['logado'])) {
	header("Location: login.php");
	exit;
}
$usuarios = new Usuarios($pdo);
$usuarios->setUsuario($_SESSION['logado']);

if($usuarios->temPermissao("SECRET") == false){
	header("Location: index.php");
	exit;
}
?>


<h1>página secreta</h1>