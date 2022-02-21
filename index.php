<!DOCTYPE html>
<head>
    <title>Desafio de Código - Capgemini</title>

    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="content">

<div class="title">
    <h1>Desafio de Código - Capgemini</h1>
    <p class="author">Autor: Lincoln Moro</p>
</div>

<div class="content-body">

<div class="box-question">

<h2>Questão 1</h2>

<!-- Questão 1 - Formulário de captura de valor para árvore -->
<form method="post" action="">
    <div class="form-field">
        <label for="number">Digite um número entre 2 e 20</label>
    </div>
    <div class="form-field">
        <input type="number" id="number" name="number" min=2 max=20 class="input-value">
    </div>
    
    <div class="form-field">
        <input type="submit" name="questao1" value="Enviar" class="btn">
    </div>
</form>

<?php
// Executa o campo da questão 1
if(isset($_POST['questao1'])) {
    $treeNumber = $_POST['number'];
    $i = 0;
    $asterisk = "*";

    echo "<div class='box'><h3>Resultado</h3>";

    // Executa a impressão da árvore na tela
    while($i < $treeNumber) {

        // Define o número de espaços em branco de forma decrescente
        $j = $treeNumber - $i;

        // Imprime os espaços em branco
        while($j > 1) {
            echo '&nbsp&nbsp';
            $j--;
        }

        // Imprime os asteriscos e quebra de linha
        echo $asterisk;
        echo "</br>";
        $asterisk = $asterisk . "*";
        $i++;
    }

    echo "</div>";
}
?>

</div>

<div class="box-question">

<h2>Questão 2</h2>

<!-- Questão 2 - Formulário de captura de senha para verificação de segurança da senha -->
<form method="post" action="">
    <div class="form-field">
        <label for="anagram">Digite o valor aqui</label>
    </div>
    <div class="form-field">
        <input type="text" id="password" name="password" class="input-value">
    </div>
    
    <div class="form-field">
        <input type="submit" name="questao2" value="Enviar" class="btn">
    </div>
</form>

<?php

// Executa o campo da questão 2
if(isset($_POST['questao2'])) {
    $password = $_POST['password'];

    echo "<div class='box'><h3>Resultado</h3>";

    // Identifica se a senha possui caracteres especiais, letras maiúsculas e minúsculas, números e comprimento da senha
    if(
        preg_match('/[!@#$%\^&*()-\+]/', $password) &&
        preg_match('/[a-z0-9]/', $password) && 
        preg_match('/[A-Z]/', $password) &&
        strlen($password) > 6) {
            echo "A senha é segura :D";
        }
        // Em caso de não cumprimento, exibe as exigências da senha
    else {
        echo "A senha deve conter:" . "</br>";
        echo "
        <ul>
        <li>No mínimo 6 caracteres</li>
        <li>No mínimo 1 letra em minúsculo</li>
        <li>No mínimo 1 letra em maiúsculo</li>
        <li>No mínimo 1 digito</li>
        <li>No mínimo 1 caractere especial como: !@#$%^&*()-+</li>
        </ul>
        ";
    }

    echo "</div>";
}
?>

</div>

<div class="box-question">
    
<h2>Questão 3</h2>

<!-- Questão 3 - Formulário de captura de valor para verificação de anagrama -->
<form method="post" action="">
    <div class="form-field">
        <label for="anagram">Digite o valor aqui</label>
    </div>
    <div class="form-field">
        <input type="text" id="anagram" name="anagram" class="input-value">
    </div>
    
    <div class="form-field">
        <input type="submit" name="questao3" value="Enviar" class="btn">
    </div>
</form>

<?php

// Executa o campo da questão 3
if(isset($_POST['questao3'])) {
    $string = $_POST['anagram'];
    $anagram = str_split($string);

    // Contador de anagramas
    $count = 0;

    echo "<div class='box'><h3>Resultado</h3>";

    /* Compara os valores de um caracter com base nos caracteres seguintes, e, 
    se houver uma distância entre os caracteres repetidos, é assinalado como 
    um novo anagrama pela possibilidade de troca dos caracteres */
   for($i = 0; $i < sizeof($anagram); $i++) {
       for($j = $i + 1; $j < sizeof($anagram); $j++) {
           if($anagram[$i] == $anagram[$j]) {
                $count == $count++;
                if($i + 1 < $j) { 
                    $count == $count++;
                }
           }
       }
   }
    echo "O número total de anagramas de substrings é de: " . $count;
    echo "</div>";
}
?>

</div>

</div>

</div>

</body>