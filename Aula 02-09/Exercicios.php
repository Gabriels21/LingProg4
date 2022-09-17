<style>
    p{
        font-size: 20px;;
    }
</style>
<?php

//Exercício 1
//---------------

# Exercício 01
# Escrever um Programa documentado que faça
# 
# Apresentar operadores de:
# a) Atribuição
# b) Aritmético
# c) Módulo
# d) Divisão; Produto; Potência;
# e) Combinados
# f) Pós e Pré incremento e Decremento

//Resolução

echo "<h1>Exercícios</h1>";

echo"<h2> a) Atribuição <br> </h2>";
echo"<h3>O operador = atribui o valor a uma variável, nesse caso o valor da variável é 10 </h3>";

//Atribui o valor 10 para a variável $la
$la = 10;;

echo "<p>";
echo $la;
echo "</p>";

echo '<hr>';
//-----------------------------------------------------------------------------------------------------

echo"<h2> b) Aritmético </h2>";
echo "<h3>Os operadores aritméticos são utilizados para adicionar (+), subtrair (-), multiplicar (*) e dividir (/) os valores de uma variável </h3>";

//Atribui o valor 10 para a variável $lb e o valor de 5 para variável $lb2
$lb = 10;
$lb2 = 5;

echo "<p>";
echo"Adição: lb + lb2 = ".$lb + $lb2;
echo '<br>';

echo"Subtração: lb - lb2 = ".$lb - $lb2;
echo '<br>';

echo"Multiplicação: lb * lb2 = ".$lb * $lb2;
echo '<br>';

echo"Divisão: lb / lb2 = ".$lb / $lb2;
echo '<br>';
echo "</p>";

echo '<hr>';

# c) Módulo

echo"<h2> c) Módulo </h2>";
echo "<h3>O módulo (%) é utilizado para exibir o resto de uma divisão</h3>";

//Atribui o valor 50 para a variável $lc
$lc = 50;

echo '<p>';
echo "Resto da divisão de 50 por 2: ".$lc % 2;
echo '</p>';

echo '<hr>';

# d) Divisão; Produto; Potência;

echo"<h2> d) Divisão; Produto; Potência </h2>";
echo "<h3>Divisão (/), Produto (*) e Potência (**)</h3>";

//Atribui o valor 30 para a variável $ld e o valor de 20 para variável $ld2
$ld = 50;
$ld2 = 25;

echo "<p>";
echo"Divisão: ld / ld2 = ".$ld / $ld2;
echo '<br>';

echo"Produto: ld * ld2 = ".$ld * $ld2;
echo '<br>';

echo"Potenciação:  de ld = ".$ld ** 2;
echo '<br>';
echo"Potenciação:  de ld2 = ".$ld2 ** 2;
echo "</p>";

echo '<hr>';

# e) Combinados

echo"<h2> e) Combinados </h2>";
echo "<h3>Permitem que alteremos o valor original de uma variável, a partir do valor original</h3>";

//Atribui o valor 10 para a variável $le e conforme utilizei os operadores combinados o valor final da variável $le mudou
$le = 10;
$le = $le + 10;
$le = $le - 7;
$le = $le * 2;
$le = $le / 2;

echo '<p>';
echo $le;
echo'</p>';

echo '<hr>';

# f) Pós e Pré incremento e Decremento

//Operador de INCREMENTO
//Permitem adicionar uma unidade a variável

echo"<h2> f) Pós e Pré incremento e Decremento </h2>";
echo "<h3>Operador de INCREMENTO, permitem adicionar uma unidade a variável</h3>";

//A variável $y foi iniciada com o valor 1
echo '<p>';
echo "Iniciando a variável: ";
$y = 1;
echo $y;
echo '<br>';

echo "Incremento: ";
$y = 1 + 1;
echo $y;
echo '<br>';

echo "Pós incremento: "; 
$y++;
echo $y;
echo '<br>';

echo '</p>';

//Operador de DECREMENTO
//Permitem subtrair uma unidade a variável

echo "<h3>Operador de DECREMENTO, Permitem subtrair uma unidade a variável</h3>";

//A variável $y foi iniciada com o valor 5
echo '<p>';
echo "Iniciando a variável: ";
$y = 5;
echo $y;
echo '<br>';

echo "Pós decremento: ";
$y--;
echo $y;
echo '<br>';

echo "Pré-decremento: ";
--$y;
echo $y;
echo '<br>';

echo '</p>';

?>