<!-- Questão 1 - Formulário de captura de valor de entrada do usuário -->
<form method="post" action="">
    <div>
        <label for="number">Digite o valor aqui</label>
        <input type="number" id="number" name="number">
    </div>
    
    <div>
        <input type="submit" name="questao1" value="Enviar">
    </div>
</form>

<?php
// Executa o campo da questão 1
if(isset($_POST['questao1'])) {
    $treeNumber = $_POST['number'];
    $i = 0;
    $asterisk = "*";

    echo "<div class='box'><h2>Resultado</h2>";

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

<form method="post" action="">
    <div>
        <label for="anagram">Digite o valor aqui</label>
        <input type="text" id="password" name="password">
    </div>
    
    <div>
        <input type="submit" name="questao2" value="Enviar">
    </div>
</form>

<?php

if(isset($_POST['questao2'])) {
    $password = $_POST['password'];

    echo "<div class='box'><h2>Resultado</h2>";

    if(
        preg_match('/[!@#$%\^&*()-\+]/', $password) &&
        preg_match('/[a-z0-9]/', $password) && 
        preg_match('/[A-Z]/', $password) &&
        strlen($password) > 6) {
            echo "A senha é segura :D";
        }
    else {
        echo "A senha deve conter";
    }
}
?>

    

<form method="post" action="">
    <div>
        <label for="anagram">Digite o valor aqui</label>
        <input type="text" id="anagram" name="anagram">
    </div>
    
    <div>
        <input type="submit" name="questao3" value="Enviar">
    </div>
</form>

<?php

if(isset($_POST['questao3'])) {
    $string = $_POST['anagram'];
    $anagram = str_split($string);
    $count = 0;

    echo "<div class='box'><h2>Resultado</h2>";

   for($i = 0; $i < $anagram; $i++) {
       for($j = 1; $j <= $anagram; $j++) {
           var_dump($anagram);
           if($anagram[$i] == $anagram[$j]) {
                $count == $count++;
                if($i + 1 > $j) { 
                    $count == $count++;
                }
           }
       }
   }
    echo $count;
    echo "</div>";
}
?>