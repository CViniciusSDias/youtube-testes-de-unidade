<?php

require_once 'Pessoa.php';

// Arrange
$pessoa = new Pessoa('Vinicius', new DateTimeImmutable('1997-10-15'));

// Act
$idadePessoa = $pessoa->idade();

// Assert
$idadeEsperada = 22;

if ($idadeEsperada === $idadePessoa) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
