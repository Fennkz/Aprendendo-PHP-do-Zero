<?php
// Produtos
$produto1 = "Camiseta";
$produto2 = "Calça";
$produto3 = "Tênis";

// Preços
$preco1 = 29.99;
$preco2 = 59.99;
$preco3 = 89.99;

// Quantidades em estoque
$estoque1 = 10;
$estoque2 = 5;
$estoque3 = 8;
?>

<?php
include "produtos.php";

// Exemplo de uso das variáveis de produtos
echo "O produto 1 é uma {$produto1} e custa {$preco1} reais. Existem {$estoque1} unidades em estoque.";
?>
