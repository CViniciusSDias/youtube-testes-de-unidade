<?php

require_once 'src/Pessoa.php';
require_once 'src/SegurancaBalada.php';

// Arrange
$pessoa = new Pessoa('Vinicius', new DateTimeImmutable('1997-10-15'));
$seguranca = new SegurancaBalada();

// Act
$deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa, new DateTimeImmutable('2021-02-20'));

// Assert
if ($deixouPessoaEntrar === true) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
