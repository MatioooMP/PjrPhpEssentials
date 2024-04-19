
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <?php  
$login = filter_input(INPUT_POST, "login", FILTER_VALIDATE_EMAIL);
$senha = $_POST["senha"];

if ($login && strlen($senha) == 8) {
    if (validarUsuario($login, $senha)) {
        echo "<span class\"welcome\"> Bem vindo " . $login . "!</span>";
        $perfil = "ADM";
        carregarOpcoes($perfil);
    } else {
        echo "<span class=\"error\"> Login ou senha inválidos</span>";
    }
} else {
    header("Location: ./../index.html");
    exit;
}
?>
</body>

</html>
<?php

//   var_dump($_GET);

//Sanitize

//Validation





//array associativo $_POST
// renderizarMsgWeb($_POST["login"],$_POST["senha"]);
//Rotina ou função ou método para pegar o perfil do usuario
// $perfil = "ADM";
// carregarOpcoes($perfil) ;

// $variavel = 140;

// echo"Bem Vindo, " .  $user . PHP_EOL . "<br> O valor da variável é " . $variavel . "<br>";

// var_dump( $user );
// var_dump( $variavel);

// if ($user == "juquinha@pizzas.com.br" && $pwd == "1234") {
//     echo"<span> Bem Vindo, " .$user."! </span>";  
//         carregarOpcoes($perfil) ;
// }
// else {
//     echo"<span> Login ou Senha inválidos!!! </span>";
// }



function carregarOpcoes(string $opcaoPerfil)
{

    if ($opcaoPerfil == "ADM") {
        redenziraMenu(6);
        // echo "<ul>";
        // for ($i=1; $i <=6 ; $i++) {
        //     echo "<li><a href=\"\">Opção " .$i. "</a></li>";
        // }
        // echo"</ul>";
    } elseif ($opcaoPerfil == "VEN") {
        redenziraMenu(3);
        //   $i=1;
        //   do {
        //     echo "<li><a href=\"\">Opção " .$i. "</a></li>";
        //     $i++;  
        //   } while ($i <= 3);  
    } elseif ($opcaoPerfil == "CLI") {
        redenziraMenu(10);
        // $i= 1;
        // while ($i <= 10) {
        //     echo "<li><a href=\"\">Opção " .$i. "</a></li>";
        //     $i++;
        // }
    }
}


function redenziraMenu(int $numeroperfil)
{
    echo "<ul>";
    for ($i = 1; $i <= $numeroperfil; $i++) {
        echo "<li><a href=\"\">Opção " . $i . "</a></li>";
    }
}

//OPERADOR TERNÁRIO -o famoso if de uma linha
//Exemplo 1
//condição ? resultado se for true : resultado se for false;

// echo($user == "juquinha@pizzas.com.br" && $pwd == "123" ) ? "<span> Bem vindo, " . $user . "!</span>" : "<span> Login ou senha invalidos!!! </spam>";

//Exemplo 2
// $clienteAtivo = true;
// echo ($clienteAtivo) ? "Cliente ativo" : "CLiente Inativo";

function validarUsuario(string $login, string $senha)
{
    return ($login == "juquinha@pizzas.com.br" && $senha == "12345678") ? true : false;
}
?>