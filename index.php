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

