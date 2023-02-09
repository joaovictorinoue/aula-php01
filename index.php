<?php
echo "<h1>PHP Aula-02</h1>";
echo "<br>";
echo "<hr>";
echo "<h2>Tipos de Dados</h2>";
echo "<hr>";

$nome = "Bruce";
$idade = 40;
$altura = 1.78;
$fumante = false;

echo "Nome: " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";
echo "Fumante: " . $fumante;
echo "<br>";

echo $nome . " - " . $idade . " - " . $altura . " - " . $fumante . "<br>";
echo "<br>";


echo "Nome: " . gettype($nome) . "<br>";
echo "Idade: " . gettype($idade) . "<br>";
echo "Altura: " . gettype($altura) . "<br>";
echo "Fumante: " . gettype($fumante) . "<br>";
echo "<br>";
echo "<hr>";

echo "<h2> Operadores Aritiméticos </h2>";
echo "<hr>";
$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % 2 . "<br>";
echo $n1 ** 2 . "<br>";

echo "<br>";
echo "<hr>";
echo "<h2>Operadores Relacionais</h2>";
echo "<hr>";

echo ($n1 > $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 != $n2) . "<br>";
echo ($n1 == $n2) . "<br>";

echo "<br>";
echo "<hr>";
echo "<h2>Operadores Lógicos</h2>";
echo "<hr>";

echo (20>10) && (10>15);
echo "<br>";
echo (20>10) || (10<15);
echo "<br>";
echo !(10 < 5);
?>