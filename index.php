<?php 

require_once("config.php");

//Carrega 1 usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("Th");
echo json_encode($search);

//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("Thiago", "lindo");

//echo $usuario;
 ?>