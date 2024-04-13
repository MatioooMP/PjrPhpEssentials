<?php
$user = "juquinha@jspizzas.com.br";
$pwd = "1234";
$perfil = "CLI";

// // $variavel = 140.55;
// // $variavel = "false";

// echo "Bem vindo,<b>" . $user . PHP_EOL. "</b> <br>O valor da variável é " . $variavel . "<br>";

// var_dump($user);
// var_dump($variavel);

if ($user == "juquinha@jspizzas.com.br" && $pwd == "1234") {
    echo "<span> Bem vindo,  " . $user . "!</span>";
    carregarOpcoes($perfil);
} else {
    echo "<span> Login ou senha inválidos!!!</span>";
}

function carregarOpcoes(string $opcaoPerfil)
{
    if ($opcaoPerfil == "ADM") {
        echo "<ul>";
        for ($i = 1; $i <= 6; $i++) {
            echo "<li><a href=\"\">Opção " . $i . "</a></li>";
        }
        echo "</ul>";
    } else if ($opcaoPerfil == "VEN") {
        $i = 1;
        do {
            echo "<li><a href=\"\">Opção" . $i . "</a></li>";
            $i++;
        } while ($i <= 3);
    } else if ($opcaoPerfil == "CLI") {
        $i = 1;
        while ($i <= 10) {
            echo "<li><a href=\"\">Opção" . $i . "</a></li>";
            $i++;
        }
    }
}
