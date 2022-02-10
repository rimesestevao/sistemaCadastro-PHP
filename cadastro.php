<?php 
// Variável para coleta dos dados de erro
$erro = false;

// Não podemos deixar um post vazio.
if ( !isset( $_POST ) || empty( $_POST ) ) {
    $erro = 'POST está vazio.';
   }

// Variáveis dinâmicas do formulário
foreach ( $_POST as $chave => $valor ) {
// Limpa todas as tags HTML
// Limpa os espaços em branco do valor
    $$chave = trim( strip_tags( $valor ) );
    
// Verifica se existe algum dado nulo
    if ( empty ( $valor ) ) {
    $erro = 'Existem campos em branco.';
    }
   }
?>